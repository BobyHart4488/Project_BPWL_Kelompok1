<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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