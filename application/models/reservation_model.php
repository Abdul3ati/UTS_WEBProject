<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reservation_model extends CI_Model {

    public function getAllreservation()
    {
        $query=$this->db->get('reservation');
        return $query->result_array();
        // return $this->db->get('reservation')->result_array();
    }

    public function tambahdatarsr(){
        $data=[
            "time" => $this->input->post('time', true),
            "date" => $this->input->post('date', true),
            "name" => $this->input->post('name', true),
            "tlpnumber" => $this->input->post('tlpnumber', true),
            "numberpeople" => $this->input->post('numberpeople', true),
            "comments" => $this->input->post('comments', true)
        ];

        $this->db->insert('reservation', $data);
    }

    public function hapusdatarsr($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('reservation');
    }

    public function getreservationByID($id)
    {
        return $this->db->get_where('reservation',['id'=>$id])->row_array();
    }

    public function ubahdatarsr()
    {
        $data=[
            "time" => $this->input->post('time', true),
            "date" => $this->input->post('date', true),
            "name" => $this->input->post('name', true),
            "tlpnumber" => $this->input->post('tlpnumber', true),
            "numberpeople" => $this->input->post('numberpeople', true),
            "comments" => $this->input->post('comments', true)
        ];
        $this->db->where('id', $this->input-post('id'));
        $this->db->update('reservation',$data);
    }

    public function cariDataReservation(){
        $keyword=$this->input->post('keyword');
        $this->db->like('name',$keyword);
        // $this->db->like('time',$keyword);
        $this->db->or_like('date',$keyword);
        return $this->db->get('reservation')->result_array();
    }

    public function datatables(){
        $query= $this->db->order_by('id','DESC')->get('reservation');
        return $query->result();
    }
}
?>