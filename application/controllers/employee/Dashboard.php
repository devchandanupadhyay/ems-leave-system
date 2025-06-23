<?php

// application/controllers/employee/Dashboard.php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'controllers/BaseController.php');

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->auth_lib->check_login('employee');
    }
    public function index()
    {
        $data['title'] = 'Employee Dashboard';
        $this->render('employee/dashboard', $data, 'employee');
    }
}
 