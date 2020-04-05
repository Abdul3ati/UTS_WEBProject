<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model {

    public function view(){
        $this->db->select('id,date,time,name,tlpnumber,numberpeople,comments');
        $query= $this->db->get('reservation');
        return $query->result();
    }
}

?>