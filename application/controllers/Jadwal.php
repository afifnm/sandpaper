<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function index(){

        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('booking a');
        $this->db->join('konten b','a.id_konten=b.id_konten','left');
        $booking = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $data = array(
            'judul_halaman' => 'Home',
            'konfig' => $konfig,
            'kategori' => $kategori,
            'booking' => $booking,
        );
		$this->load->view('jadwal', $data); 
	}
    
    
}
