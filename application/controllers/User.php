<?php

class User extends CI_Controller {

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

        $role=$this->user->Get_role();
        $data=array('role'=>$role);
        $this->load->view('common/header',$user);
        $this->load->view('User/User_form',$data);
        $this->load->view('common/footer');
        }
    }
    function user_submit(){
        $user= $this->input->post('username');
        $pass= $this->input->post('password');
        $email= $this->input->post('email');
        $designation= $this->input->post('designation');
        $role= $this->input->post('role');
      $password= md5($pass);
        $data=array('User_Name'=>$user,'Password'=>$password,'Role_ID'=>$role,'EMAIL'=>$email,'Designation'=>$designation);
        $user_data=$this->user->InsertUser($data);
        echo $user_data;
    }
    function RestPassword(){
        $user= $this->input->post('user');
        $old= $this->input->post('oldpass');
        $new= $this->input->post('newpass');
         $oldpass= md5($old);
         $newpass= md5($new);
         
         $r_data=$this->user->ResetPassword($user,$oldpass,$newpass);
    }

}
