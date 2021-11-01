<?php

class Dashboard extends CI_Controller {

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

            $Three_wheeler_slot = 20;
            $Two_wheeler_slot = 30;
            $Four_wheeler_slot = 15;
            $four = $this->dashboard->FourWheeler_count();
            $three = $this->dashboard->ThreeWheeler_count();
            $two = $this->dashboard->TwoWheeler_count();

            $remain_three_slots = $Three_wheeler_slot - $three;
            $remain_two_slots = $Two_wheeler_slot - $two;
            $remain_four_slots = $Four_wheeler_slot - $four;
            $Total = $four + $three + $two;

            $data = array('FOUR' => $four, 'THREE' => $three, 'TWO' => $two, 'four_slots' => $remain_four_slots, 'three_slot' => $remain_three_slots, 'two_slot' => $remain_two_slots, 'total' => $Total);


            $this->load->view('common/header', $user);
            $this->load->view('Dashboard/dashboard', $data);
            $this->load->view('common/footer');
        }
    }

}
