<?php
// application/controllers/admin/Dashboard.php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'controllers/BaseController.php');

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->auth_lib->check_login('admin');
    }
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $this->render('admin/dashboard', $data, 'admin');
    }
}
