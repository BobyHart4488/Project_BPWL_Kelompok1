<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tampilPesanan(){
		$query = $this->db->query('SELECT * FROM pesanan');
		return $query->result();
	}

	function tampilPesananPembeli($id_pembeli){
		$query = $this->db->query("SELECT * FROM pesanan WHERE id_pembeli='$id_pembeli'");
		return $query->result();
	}

	function tambahPesanan()
	{
		$data = array(
			'id_pesanan' => $this->input->post('id_pesanan'),
			'id_pembeli' => $this->input->post('id_pembeli'),
			'total' => $this->input->post('total')
		);
		$this->db->insert('pesanan', $data);
	}

	function rowUbahPesanan($id_pesanan){
		$query = $this->db->query("SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'");
		return $query->row();
	}

	function ubahPesanan($id_pesanan){
		$data = array(
			'id_pesanan' => $this->input->post('id_pesanan'),
			'id_pembeli' => $this->input->post('id_pembeli'),
			'total' => $this->input->post('total')
		);
		$this->db->where('id_pesanan',$id_pesanan);
		$this->db->update('pesanan', $data);
	}
	
	function hapusPesanan($id_pesanan){
		$query = $this->db->query("DELETE FROM pesanan WHERE id_pesanan = '$id_pesanan'");
	}

	function tampilDetailPesanan(){
		$query = $this->db->query('SELECT * FROM detail_pesanan');
		return $query->result();
	}

	function tampilDetailPesananPembeli($id_pembeli){
		$query = $this->db->query("SELECT * FROM detail_pesanan WHERE id_pembeli='$id_pembeli'");
		return $query->result();
	}

	// function tambahDetailPesanan()
	// {
	// 	$data = array(
	// 		'id_pesanan' => $this->input->post('id_pesanan'),
	// 		'id_pembeli' => $this->input->post('id_pembeli'),
	// 		'total' => $this->input->post('total')
	// 	);
	// 	$this->db->insert('pesanan', $data);
	// }

	// function rowUbahDetailPesanan($id_pesanan){
	// 	$query = $this->db->query("SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'");
	// 	return $query->row();
	// }

	// function ubahDetailPesanan($id_pesanan){
	// 	$data = array(
	// 		'id_pesanan' => $this->input->post('id_pesanan'),
	// 		'id_pembeli' => $this->input->post('id_pembeli'),
	// 		'total' => $this->input->post('total')
	// 	);
	// 	$this->db->where('id_pesanan',$id_pesanan);
	// 	$this->db->update('pesanan', $data);
	// }
	
	function hapusDetailPesanan($id_pesanan){
		$query = $this->db->query("DELETE FROM detail_pesanan WHERE id_pesanan = '$id_pesanan'");
	}
}