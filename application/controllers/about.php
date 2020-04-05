<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function index()
    {
        $data['title']='about';
        // $data['name']=$name;
        $this->load->view('template/header1',$data);
        //echo " Selamat Datang di Halaman Home";
        $this->load->view('about/index',$data);
        $this->load->view('template/footer');
        

    }

}