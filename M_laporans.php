<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporans extends CI_Model {

    public function getlaporan() {
        return $this->db->query("select * from laporansdm")->result();
    }
}