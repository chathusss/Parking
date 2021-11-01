<?php

class Vehicle extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
 if (!$this->session->has_userdata('isLogin')) {
            redirect('/Login');
        } else {
            $username = $this->session->userdata('UserName');
            $lrole = $this->session->userdata('role');
            $user = array('user' => $username, 'role' => $lrole);
        $this->load->view('common/header',$user);
        $this->load->view('vehicle/Vehicle_Reg');
        $this->load->view('common/footer');
        }
    }

    function EnterVehicle() {
        $vehicle = $this->input->post('vehicle');
        $vehicle_type = $this->input->post('vehicle_type');
        $card_no = $this->input->post('card_no');
        $nic = $this->input->post('nic');

        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d H:i:s");

        $vehicle_data = array('Vehicle_Number' => $vehicle, 'Vehicle_Type' => $vehicle_type, 'Vehicle_IN_Time' => $date, 'Vehicle_Status' => 'ACTIVE', ' Vehicle_Card_Number' => $card_no, 'Owner_NIC' => $nic);
        $data = $this->vehicle->SubmitVehicle($vehicle_data);
        echo $data;
    }

    function FindVehicle() {
        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d H:i:s");
        $card_no = $this->input->post('card_no');
        $data = array(' Vehicle_Card_Number' => $card_no);
        $vehicle_data = $this->vehicle->FindVehicle($data);
        $out = $this->vehicle->UpdateOutTime($date, $card_no);
        $data = array(' Vehicle_Card_Number' => $card_no);
        $vehicle_data = $this->vehicle->FindVehicle($data);
        echo json_encode($vehicle_data);

        $vehi_session = array('vehicle' => $vehicle_data[0]['Vehicle_Number'],
            'vehicleType' => $vehicle_data[0]['Vehicle_Type'],
            'vehicleIN' => $vehicle_data[0]['Vehicle_IN_Time'],
            'vehicleOUT' => $vehicle_data[0]['Vehicle_OUT_Time'],
            'vehicleStatus' => $vehicle_data[0]['Vehicle_Status'],
            'ownerNIC' => $vehicle_data[0]['Owner_NIC'],
            'vehicleCard' => $vehicle_data[0]['Vehicle_Card_Number']);

        $this->session->set_userdata($vehi_session);
        $vehi = ( $this->session->userdata("userdata"));
//        var_dump($vehi);
//        die();
    }

    function invoice() {
//         $username = $this->session->userdata('UserName');
        $vehicle = $this->session->userdata('vehicle');
        $vehitype = $this->session->userdata('vehicleType');
        $vehiIN = $this->session->userdata('vehicleIN');
        $vehiOUT = $this->session->userdata('vehicleOUT');
        $vehiStatus = $this->session->userdata('vehicleStatus');
        $vehiCard = $this->session->userdata('vehicleCard');
        $NIC = $this->session->userdata('ownerNIC');

        $dteStart = new DateTime($vehiIN);
        $dteEnd = new DateTime($vehiOUT);
        $dteDiff = $dteStart->diff($dteEnd);
        $time = $dteDiff->format("%H.%I");
        if ($vehitype === "Four Wheeler") {
            $price = $time * 35;
        } else if ($vehitype === "Three Wheeler") {
            $price = $time * 30;
        } else if ($vehitype === "Two Wheeler") {
            $price = $time * 20;
        }
        $vehical_data = array('vehicle' => $vehicle, 'vehicleType' => $vehitype, 'VehicleIN' => $vehiIN, 'vehicleOUT' => $vehiOUT);
        $vehicle_invoice = array($vehical_data);
        $income_data=array( 'Vehicle_Type'=>$vehitype,'Date'=>$vehiOUT,'Price'=>$price);
        $income= $this->vehicle->IncomeStatus($income_data);
        $data = array('vehicles' => $vehicle_invoice, 'status' => $vehiStatus, 'price' => $price, 'card' => $vehiCard,'nic'=>$NIC);
        $this->load->view('common/header');
        $this->load->view('vehicle/Vehicle_Invoice', $data);
        $this->load->view('common/footer');
    }

    function Inactive() {

        $vehicle = $this->input->get('vehicle');
        $data = array('Vehicle_Status' => 'INACTIVE');
        $this->vehicle->VehicleInactive($data, $vehicle);
        redirect('/Vehicle');
    }

    function getInactiveVehicle() {
        
         if (!$this->session->has_userdata('isLogin')) {
            redirect('/Login');
        } else {
            $username = $this->session->userdata('UserName');
            $lrole = $this->session->userdata('role');
            $user = array('user' => $username, 'role' => $lrole);
        $data = array('Vehicle_Status' => 'INACTIVE');
        $old_vehicles = $this->vehicle->InavctiveVehicle($data);
        $vehicles=array('inactive'=>$old_vehicles);
        $this->load->view('common/header',$user);
        $this->load->view('vehicle/OldEntered_Vehicles',$vehicles);
        $this->load->view('common/footer');
        }
    }
    
    function getActiveVehicle(){
         if (!$this->session->has_userdata('isLogin')) {
            redirect('/Login');
        } else {
            $username = $this->session->userdata('UserName');
            $lrole = $this->session->userdata('role');
            $user = array('user' => $username, 'role' => $lrole);
       
         $data = array('Vehicle_Status' => 'ACTIVE');
        $OnParking_vehicles = $this->vehicle->AvctiveVehicle($data);
        $vehicles=array('active'=>$OnParking_vehicles);
        $this->load->view('common/header',$user);
        $this->load->view('vehicle/Entered_Vehicles',$vehicles);
        $this->load->view('common/footer');
    }
    }

}
