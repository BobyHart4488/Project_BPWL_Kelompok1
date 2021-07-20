<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tambahAdmin()
	{
		$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('admin', $data);
	}

	function tampilAdmin(){
		$query = $this->db->query('SELECT * FROM admin');
		return $query->result();
	}

	function hapusAdmin($id_admin){
		$query = $this->db->query("DELETE FROM admin WHERE id_admin = '$id_admin'");
	}
}