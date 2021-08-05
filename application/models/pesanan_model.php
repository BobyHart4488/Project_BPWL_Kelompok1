<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function tampilPesanan()
	{
		$query = $this->db->query('SELECT * FROM pesanan pe, pembeli p WHERE pe.id_pembeli = p.id_pembeli ORDER BY p.id_pembeli DESC');
		return $query->result();
	}

	function tampilPesananPembeli($id_pembeli)
	{
		$query = $this->db->query("SELECT * FROM pesanan WHERE id_pembeli='$id_pembeli' ORDER BY id_pembeli DESC");
		return $query->result();
	}
	
	function hapusPesanan($id_pesanan)
	{
		$this->db->query("DELETE FROM pesanan WHERE id_pesanan = '$id_pesanan'");
	}

	function tampilDetailPesanan()
	{
		$query = $this->db->query('SELECT * FROM detail_pesanan');
		return $query->result();
	}

	function tampilDetailPesananPembeli($id_pesanan)
	{
		$query = $this->db->query("SELECT * FROM detail_pesanan dp, menu m
		 WHERE dp.id_menu = m.id_menu AND id_pesanan='$id_pesanan'");
		return $query->result();
	}

	function totalHargaPesanan($id_pesanan)
	{
		$this->db->query("UPDATE pesanan SET total = (SELECT sum(jumlah * harga) FROM 
		detail_pesanan dp, menu m WHERE dp.id_menu = m.id_menu AND id_pesanan = '$id_pesanan') 
		WHERE id_pesanan = '$id_pesanan'");
	}

	function tambahDetailPesanan()
	{
		$id_menu = $this->input->post('id_menu');
		$jumlah = $this->input->post('jumlah');
		$sesi_order = $this->session->userdata('session_order');
		$this->db->query("INSERT INTO detail_pesanan VALUES (CONCAT('D_',LPAD(NEXTVAL(Detail_ID),3,0))
			,'$sesi_order','$id_menu','$jumlah')");
	}

	function rowUbahDetailPesanan($id_detail){
		$query = $this->db->query("SELECT * FROM detail_pesanan WHERE id_detail = '$id_detail'");
		return $query->row();
	}

	function ubahDetailPesanan($id_detail)
	{
		$data = array(
			'id_menu' => $this->input->post('id_menu'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->db->where('id_detail',$id_detail);
		$this->db->update('detail_pesanan', $data);
	}
	
	function hapusDetailPesanan($id_pesanan)
	{
		$this->db->query("DELETE FROM detail_pesanan WHERE id_pesanan = '$id_pesanan'");
	}
/*
$query = $this->db->query("SELECT * FROM log l, pesanan pe WHERE l.id_pembeli = pe.id_pembeli AND 
		l.id_pembeli = '$id_pembeli' AND pe.id_pesanan = CONCAT('PE_',LPAD(l.currval,3,0))'")->num_rows();
		if($query == 0 && $cek == "yes") {
*/
	
	function tambahDetailPesananAwal()
	{
		$id_pembeli = $this->session->userdata('id');
		$cek = $this->session->userdata('session_input');
		if($cek == 'yes') {
			$this->db->query("INSERT INTO log VALUES (NEXTVAL(Pesanan_ID),'$id_pembeli')");

			$this->db->query("INSERT INTO pesanan(id_pesanan, id_pembeli) VALUES (CONCAT('PE_'
			,LPAD((SELECT max(currval) FROM log WHERE id_pembeli = '$id_pembeli'),3,0)),'$id_pembeli')");
			
			$tampung = $this->db->query("SELECT max(id_pesanan) as id_pesanan_new FROM pesanan WHERE id_pembeli = '$id_pembeli'")->result();
			foreach($tampung as $x) {
				$sesi_order = $x->id_pesanan_new;
			}

			$id_menu = $this->input->post('id_menu');
			$jumlah = $this->input->post('jumlah');
			$this->db->query("INSERT INTO detail_pesanan VALUES (CONCAT('D_',LPAD(NEXTVAL(Detail_ID),3,0))
			,'$sesi_order','$id_menu','$jumlah')");

			$data_session = array(
				'session_order' => $sesi_order
			);
	
			$this->session->set_userdata($data_session);
		}
	}
}