<?php

class User_model extends CI_Model
{
    public function get_by_email($email)
    {
        return $this->db->where('email', $email)->get('users')->row();
    }
}
