<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_lib {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function check_login($required_role = null) {
        $session = $this->CI->session;

        if (!$session->userdata('logged_in')) {
            redirect('auth/login');
        }

        if ($required_role && $session->userdata('active_role') !== $required_role) {
            show_error('Access Denied: Role mismatch.', 403);
        }
    }
}
