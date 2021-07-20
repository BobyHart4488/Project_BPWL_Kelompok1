<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tampilMenu(){
		$query = $this->db->query('SELECT * FROM menu');
		return $query->result();
	}

	function tambahMenu()
	{
		$data = array(
			'id_menu' => $this->input->post('id_menu'),
			'nama' => $this->input->post('nama_menu'),
			'jenis' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'persediaan' => $this->input->post('persediaan')
		);
		$this->db->insert('menu', $data);
		redirect(base_url("Admin/menus"));
	}

	function rowUbahMenu($id_menu){
		$query = $this->db->query("SELECT * FROM menu WHERE id_menu = '$id_menu'");
		return $query->row();
	}

	function ubahMenu($id_menu){
		$data = array(
			'id_menu' => $this->input->post('id_menu'),
			'nama' => $this->input->post('nama_menu'),
			'jenis' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'persediaan' => $this->input->post('persediaan')
		);
		$this->db->where('id_menu',$id_menu);
		$this->db->update('menu', $data);
	}
	
	function hapusMenu($id_menu){
		$query = $this->db->query("DELETE FROM menu WHERE id_menu = '$id_menu'");
	}
}