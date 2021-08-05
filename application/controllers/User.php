<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('menu_model');
		$this->load->model('pesanan_model');
	}
	
	public function index()
	{
		$data_session = array(
			'session_input' => 'no'
		);

		$this->session->set_userdata($data_session);
		$this->load->view('home');
	}

	public function order_input()
	{
		$data_session = array(
			'session_input' => 'yes'
		);

		$this->session->set_userdata($data_session);
		$this->load->view('order_input');
	}

	public function lanjut_order()
	{
		$this->load->view('order_input2');
	}

	public function lihat_order()
	{
		$data_session = array(
			'session_input' => 'no'
		);

		$this->session->set_userdata($data_session);
		$this->load->view('lihat_order');
	}

	// Hapus Data Pembeli
	public function c_hapusUser($id_pembeli)
	{
		$this->user_model->hapusUser($id_pembeli);
		redirect('User');
	}

	// Tampil Order Pertama
	public function c_tambahOrder1()
	{
		$this->pesanan_model->tambahDetailPesananAwal();
		redirect('User/lanjut_order');
	}

	// Tampil Order Selanjutnya
	public function c_tambahOrder2()
	{
		$this->pesanan_model->tambahDetailPesanan();
		redirect('User/lanjut_order');
	}

	// Selesai Order Selanjutnya
	public function c_selesaiOrder()
	{
		$id_pesanan = $this->session->userdata('session_order');
		$this->pesanan_model->totalHargaPesanan($id_pesanan);
		redirect('User/lihat_order');
	}
}
