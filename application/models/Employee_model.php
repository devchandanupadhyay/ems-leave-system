<?php

// application/models/Employee_model.php
class Employee_model extends CI_Model {
    public function get_all() {
        return $this->db->get('employees')->result();
    }

    public function get($id) {
        return $this->db->where('employee_id', $id)->get('employees')->row();
    }

    public function insert($data) {
        return $this->db->insert('employees', $data);
    }

    public function update($id, $data) {
        return $this->db->where('employee_id', $id)->update('employees', $data);
    }

    public function delete($id) {
        return $this->db->where('employee_id', $id)->delete('employees');
    }
}

?>