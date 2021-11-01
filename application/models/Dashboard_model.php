<?php

class Dashboard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function ThreeWheeler_count() {
        

        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where('Vehicle_Type', "Three Wheeler");
        $this->db->where('Vehicle_Status', 'ACTIVE');
        $query = $this->db->get();
        
        $three_count = $query->num_rows();
        
        return $three_count;
    }
    
    function TwoWheeler_count() {
        

        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where('Vehicle_Type', "Two Wheeler");
        $this->db->where('Vehicle_Status', 'ACTIVE');
        $query = $this->db->get();
        
        $two_count = $query->num_rows();
        
        return $two_count;
    }
    
    function FourWheeler_count() {
        

        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where('Vehicle_Type', "Four Wheeler");
        $this->db->where('Vehicle_Status', 'ACTIVE');
        $query = $this->db->get();
        
        $Four_count = $query->num_rows();
        
        return $Four_count;
    }

}
