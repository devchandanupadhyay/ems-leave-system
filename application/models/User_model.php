<?php

class User_model extends CI_Model
{
    public function get_by_email($email)
    {
        return $this->db->where('email', $email)->get('users')->row();
    }

    public function insert(array $data)
    {
        // Optionally, inject timestamps
        if (!isset($data['last_login'])) {
            $data['last_login'] = null;   // or date('Y-m-d H:i:s') if you prefer
        }

        $inserted = $this->db->insert('users', $data);

        return $inserted ? $this->db->insert_id() : false;
    }

    public function delete_by_employee($employee_id)
    {
        return $this->db->where('employee_id', $employee_id)->delete('users');
    }
}
