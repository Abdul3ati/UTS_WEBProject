<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index()
    {
        $data['title']='Home';
        // $data['name']=$name;
        $this->load->view('template/header',$data);
        //echo " Selamat Datang di Halaman Home";
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        
        if($this->session->userdata('level')!="user"){
            redirect('login','refresh');
        }
    }

}

/* End of file Controllername.php */


?>  