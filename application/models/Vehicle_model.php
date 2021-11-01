<?php

class Vehicle_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function SubmitVehicle($vehicle_data) {
        if ($this->db->insert('vehicle_details', $vehicle_data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function FindVehicle($data) {
        $vehicle = array();

        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where($data);
        $this->db->where('Vehicle_Status', 'ACTIVE');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $vehicle[] = $row;
            }
        }
        return $vehicle;
    }

    function UpdateOutTime($date, $card_no) {
        $out = array('Vehicle_OUT_Time' => $date);
        $this->db->where('Vehicle_Card_Number', $card_no);
        $this->db->update('vehicle_details', $out);
    }

    function VehicleInactive($data, $vehicle) {
        $this->db->where('Vehicle_Number', $vehicle);
        $this->db->update('vehicle_details', $data);
    }

    function InavctiveVehicle($data) {
        $vehicle_data = array();
        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where($data);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $vehicle_data[] = $row;
            }
        }
//        var_dump($vehicle_data);
//        die();
        return $vehicle_data;
    }

    function AvctiveVehicle($data) {
        $vehicle_data = array();
        $this->db->select('*');
        $this->db->from('vehicle_details');
        $this->db->where($data);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $vehicle_data[] = $row;
            }
        }
        return $vehicle_data;
    }

    function IncomeStatus($income_data) {

        if ($this->db->insert('income', $income_data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
