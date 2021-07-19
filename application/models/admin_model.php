<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
	function createdAdmin()
	{
		$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('admin', $data);
	}
	function deleteDataAdmin($id_admin){
		$query = $this->db->query("DELETE FROM admin WHERE id_admin = '$id_admin'");
	}
}