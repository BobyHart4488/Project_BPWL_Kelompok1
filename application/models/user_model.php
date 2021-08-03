<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampilUser()
	{
		$query = $this->db->query('SELECT * FROM pembeli');
		return $query->result();
	}
}
