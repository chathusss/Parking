<?php

class Login_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function check_db($data){
         
        $user_data=array();
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($data);
        $query= $this->db->get();
        
        if($query->num_rows()>0){
            foreach ($query->result_array() as $row){
           
                $user_data[]=$row;
            }
        }
//        var_dump($user_data);
      return $user_data;
    }
    
}