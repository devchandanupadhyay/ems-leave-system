<?php
// application/controllers/admin/Employees.php
require_once(APPPATH . 'controllers/BaseController.php');

class Employees extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->auth_lib->check_login('admin'); // or 'hr' if needed
        $this->load->model('Employee_model');
    }

    public function index() {
        $data['title'] = 'Employee List';
        $data['employees'] = $this->Employee_model->get_all();
        $this->render('admin/employees/index', $data, 'admin');
    }

    public function add() {
        $data['title'] = 'Add Employee';
        $this->render('admin/employees/add', $data, 'admin');
    }

    public function save() {
        $this->Employee_model->insert($this->input->post());
        redirect('admin/employees');
    }

    public function edit($id) {
        $data['employee'] = $this->Employee_model->get($id);
        $data['title'] = 'Edit Employee';
        $this->render('admin/employees/edit', $data, 'admin');
    }

    public function update($id) {
        $this->Employee_model->update($id, $this->input->post());
        redirect('admin/employees');
    }

    public function delete($id) {
        $this->Employee_model->delete($id);
        redirect('admin/employees');
    }
}

?>