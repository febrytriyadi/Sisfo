<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_admin extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
            $this->load->model('m_laporan');
            $this->load->model('m_laporans');
            $this->load->model('m_laporanu');
			$this->load->library('session');
        }
        
        public function laporan(){
            $data['data']=$this->m_laporan->getlaporan();
            $this->load->view('laporanbarang',$data);
        }
        public function laporans(){
            $data['data']=$this->m_laporans->getlaporan();
            $this->load->view('laporansdm',$data);
        }
        public function laporanu(){
            $data['data']=$this->m_laporanu->getlaporan();
            $this->load->view('laporanuang',$data);
        }
        public function tambah_laporan(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'nama_barang' => $this->input->post('nama_barang'),
                'tanggal' => $this->input->post('tanggal'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
            );
            $query = $this->db->insert('laporanbarang',$data);
            if (!$query){
                echo "<script>alert('Gagal menambahkan!');history.go(-1) </script>";
            } else if ($query) {
                echo "<script>alert('Berhasil menambahkan!');history.go(-1) </script>";
            }
        redirect('C_admin/laporan');
        }
        public function tambah_laporans(){
            $data = array(
                'jabatan' => $this->input->post('jabatan'),
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'status' => $this->input->post('status'),
                'no_tlp' => $this->input->post('no_tlp'),
                'gaji' => $this->input->post('gaji'),
            );
            $query = $this->db->insert('laporansdm',$data);
            if (!$query){
                echo "<script>alert('Gagal menambahkan!');history.go(-1) </script>";
            } else if ($query) {
                echo "<script>alert('Berhasil menambahkan!');history.go(-1) </script>";
            }
        redirect('C_admin/laporans');
        }
        public function tambah_laporanu(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'jumlah' => $this->input->post('jumlah'),
                'date' => $this->input->post('date'),
                'total' => $this->input->post('total'),
                'sisa' => $this->input->post('sisa'),
            );
            $query = $this->db->insert('laporanuang',$data);
            if (!$query){
                echo "<script>alert('Gagal menambahkan!');history.go(-1) </script>";
            } else if ($query) {
                echo "<script>alert('Berhasil menambahkan!');history.go(-1) </script>";
            }
        redirect('C_admin/laporanu');
        }
	}
?>