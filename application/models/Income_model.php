<?php

class Income_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getIncomeData($from, $to) {
        $income=array();
        
        $this->db->select('sum(Price) as Price,Vehicle_Type,Date');
        $this->db->from('income');
        $this->db->where('Date>=', $from);
        $this->db->where('Date<=', $to);
         $this->db->group_by('Vehicle_Type,Date');
        
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $income[]=$row;
            }
        }
        
        return $income;
    }

}
    