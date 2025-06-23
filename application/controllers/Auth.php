<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login()
    {
        if ($this->input->method() === 'post') {
            $this-> login_process();
        } else {
            $this->load->view('auth/login');
        }
    }

    private function login_process()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $login_as = $this->input->post('login_as');
        $user = $this->User_model->get_by_email($email);
        if ($user && password_verify($password, $user->password)) {
            $roles = explode(',', $user->roles);
            if (!in_array($login_as, $roles) || $user->is_active != 1) {
                $this->session->set_flashdata('error', "You are not authorized to login as '$login_as'.");
                redirect('auth/login');
            }
            $this->session->set_userdata([
                'user_id' => $user->user_id,
                'employee_id' => $user->employee_id,
                'roles' => $roles,
                'active_role' => $login_as,
                'logged_in' => TRUE
            ]);
            redirect($login_as . '/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid credentials.');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
