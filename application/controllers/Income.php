<?php

class Income extends CI_Controller {

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
        $this->load->view('Income/income');
        $this->load->view('common/footer');
        }
    }

    function GetIncome() {
        $date1 = strtotime($this->input->post('from'));
        $date2 = strtotime($this->input->post('to'));

        $from = date("Y-m-d", $date1);
        $to=date("Y-m-d", $date2);

        
        $income_data = $this->income->getIncomeData($from, $to);
        echo json_encode($income_data);
    }

}
