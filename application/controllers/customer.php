<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->model('reservation_model');
        $this->load->model('cetak_model');
        //$this->load->library('session');

        //validasi level
        if($this->session->userdata('level') !="customer"){
            redirect('login','refresh');
        }
    }
    
    public function index()
    {
        $data = array(
            'title'=>'data reservation',
            'reservation'=>$this->reservation_model->datatables()
        );
        $this->load->view('template/header_datatables_user', $data);
        $this->load->view('reservation/user', $data);
        $this->load->view('template/footer_datatables_user');
    }

    public function tambah()
    {

        $data['title']='Form Mendaftarkan Data reservat';
        $data['numberpeople']=['1','2','3','4'];
        $this->form_validation->set_rules('time','Time','required');
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('tlpnumber','Nama','required|numeric');
        $this->form_validation->set_rules('comments','Comments');
        

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header_datatables_user', $data);
            $this->load->view('reservation/tambah', $data);
            $this->load->view('template/footer_datatables_user');
        } else {
            $this->reservation_model->tambahdatarsr();
            $this->session->set_flashdata('flash-data','added');
            redirect('customer','refresh');
        }
 
    }

}

/* End of file user.php */

?>