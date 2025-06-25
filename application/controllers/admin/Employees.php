<?php
// application/controllers/admin/Employees.php
require_once(APPPATH . 'controllers/BaseController.php');

class Employees extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->auth_lib->check_login('admin'); // or 'hr' if needed
        $this->load->model('Employee_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Employee List';
        $data['employees'] = $this->Employee_model->get_all();
        $this->render('admin/employees/index', $data, 'admin');
    }

    public function add()
    {
        $data['title'] = 'Add Employee';
        $this->render('admin/employees/add', $data, 'admin');
    }

    public function save()
    {
        // Collect employee form data
        $empData = $this->input->post();

        // 1. Insert employee
        $this->Employee_model->insert($empData);

        // 2. Get inserted employee ID
        $emp_id = $this->db->insert_id();

        // 3. Generate a secure random password
        $raw_password = bin2hex(random_bytes(5)); // e.g., '9a3f1b8de7'
        $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

        // 4. Insert corresponding user record
        $this->User_model->insert([
            'employee_id' => $emp_id,
            'email' => $empData['email'],
            'password' => $hashed_password,
            'roles' => 'employee',
            'is_active' => 1,
        ]);

        // 5. Store plain password in session (optional: display on confirmation screen)
        $this->session->set_flashdata('new_user_password', $raw_password);

        redirect('admin/employees');
    }


    public function edit($id)
    {
        $data['employee'] = $this->Employee_model->get($id);
        $data['title'] = 'Edit Employee';
        $this->render('admin/employees/edit', $data, 'admin');
    }

    public function update($id)
    {
        $this->Employee_model->update($id, $this->input->post());
        redirect('admin/employees');
    }

    public function delete($id)
    {
        // Delete user account linked to this employee
        $this->User_model->delete_by_employee($id);

        // Delete the employee record
        $this->Employee_model->delete($id);

        $this->session->set_flashdata('success', 'Employee and linked user account deleted.');
        redirect('admin/employees');
    }
}
