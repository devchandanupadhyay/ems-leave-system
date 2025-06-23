<?php
// application/controllers/BaseController.php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function render($view, $data = [], $panel = 'employee') {
        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", ['panel' => $panel]);
        $this->load->view($view, $data);
        $this->load->view("templates/footer");
    }
}

