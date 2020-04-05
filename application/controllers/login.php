<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
          
    }

    public function index()
    {
        $data['title']='Login';
        $this->load->view('template/header_login',$data);
        $this->load->view('login/index');
        
    }

    public function proses_login(){

        $username=htmlspecialchars($this->input->post('unamel'));
        $password=htmlspecialchars($this->input->post('pwd1'));

        $ceklogin=$this->login_model->login($username,$password);

        if($ceklogin){

            foreach($ceklogin as $row);

            $this->session->set_userdata('user',$row->username);
            $this->session->set_userdata('level',$row->level);


            if($this->session->userdata('level')=="admin")
            {
                redirect('reservation/index');
            }
            elseif($this->session->userdata('level')=="customer")
            {    
                redirect('customer');
            }
            else {
                
                redirect('login/index','refresh');
                
            }
        }
        else 
        {
            $data['pesan']="username dan password anda salah";
            $this->load->view('template/header_login',$data);
            $this->load->view('login/index');

        }
        
    }
    public function logout(){
        $this->session->sess_destroy();
        
        redirect('login','refresh');
        
    }

}