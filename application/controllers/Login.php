<?php

    class Login extends CI_Controller{
        function __construct() {
            parent::__construct();
        }
        
        
        function index(){
            $this->load->view('Login/login');
        }
        
        function check_database(){
            $user=$this->input->post('user');
            $pass=$this->input->post('password');
            $password= md5($pass);
//            var_dump($password);
//            die();
            $data=array('User_Name'=>$user,'Password'=>$password);
           
            $user_credential=$this->login->check_db($data);
            
            if(!$user_credential){
                return false    ;
            }else{
                $session_data=array(
                    'UserName'=>$user_credential[0]['User_Name'],
                    'Password'=>$user_credential[0]['Password'],
                    'role'=>$user_credential[0]['Role_ID'],
                    'isLogin'=>TRUE
                );
                $this->session->set_userdata($session_data);
            }
            echo $user_credential;
        }
        
        
        function check_session(){
            
            $user_data= ($this->session->userdata("userdata"));
        }
        
        function Logout(){
            
            $this->session->unset_userdata("userdata");
            $this->session->sess_destroy();
            $this->load->view('Login/login');
            
        }
        
        
    }
    

