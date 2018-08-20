<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
            
    function login(){
    
    if(isset($_POST['submit'])){
                
              echo "prose data";
              // proses login di sini
              $username  =  $this->input->post('username');
              $password  =  $this->input->post('password');
              $hasil     =  $this->model->operator('$username,$password');
             if($hasil==1)
             {
               $this->session->userdata(array('status_login'=>'ok'));
            
            }
            else{
         
                $this->load->view('form_login');
            }
    }
}
}