<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function Get_role() {
        $roles = array();
        $this->db->select('*');
        $this->db->from('roles');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $roles[] = $row;
            }
        }
        return $roles;
    }

    function InsertUser($data) {
        if ($this->db->insert('users', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function ResetPassword($user, $oldpass, $newpass) {
        $where = array('User_Name' => $user, 'Password' => $oldpass);
        $data = array('Password' => $newpass);
        
        $this->db->where($where);
        $this->db->update('users',$data);
                
    }

}
