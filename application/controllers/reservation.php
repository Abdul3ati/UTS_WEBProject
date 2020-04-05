<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservation extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('reservation_model');
        $this->load->library('form_validation');
        $this->load->model('cetak_model');

        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }
    
    public function index()
    {
        // $this->load->database();
        $data['title']='List Reservation';
        $data['reservation'] = $this->reservation_model->getAllreservation();
        if($this->input->post('keyword')){
            $data['reservation'] = $this->reservation_model->cariDataReservation();
        }
        
        $this->load->view('template/header', $data);
        $this->load->view('reservation/index', $data);
        $this->load->view('template/footer');
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
            $this->load->view('template/header', $data);
            $this->load->view('reservation/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->reservation_model->tambahdatarsr();
            $this->session->set_flashdata('flash-data','added');
            redirect('reservation','refresh');
        }
 
    }

    public function hapus($id) 
    {
        $this->reservation_model->hapusdatarsr($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('reservation','refresh');
    }

    public function detail($id)
    {
        $data['title']='Detail reservation';
        $data['reservation']=$this->reservation_model->getreservationByID($id);
        $this->load->view('template/header',$data);
        $this->load->view('reservation/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {

        $data['title']='Form Edit Data reservation';
        $data['reservation']=$this->reservation_model->getreservationByID($id);
        $data['numberpeople']=['1','2','3','4'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nim','NIM','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('reservation/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->reservation_model->tambahdatarsr();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('reservation','refresh');
        }
 
    }
    public function laporan_pdf(){
        $this->load->library('pdf');

        $data['reservation']= $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('reservation/laporan', $data);
    }

}
// /* End of file reservation.php */
?>
