<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tambahUser()
	{
		$data = array(
			'id_pembeli' => $this->input->post('id_pembeli'),
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('pembeli', $data);
	}

	function tampilUser(){
		$query = $this->db->query('SELECT * FROM pembeli');
		return $query->result();
	}
	
	function hapusUser($id_pembeli){
		$query = $this->db->query("DELETE FROM pembeli WHERE id_pembeli = '$id_pembeli'");
	}
}