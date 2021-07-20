<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model {

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
	function tampilPesanan(){
		$query = $this->db->query('SELECT * FROM pesanan');
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
}