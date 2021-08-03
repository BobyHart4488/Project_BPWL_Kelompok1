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
		$this->load->view('home');
	}

	public function order_input()
	{
		$this->load->view('order_input');
	}

	public function lihat_order()
	{
		$this->load->view('lihat_order');
	}
	
	// Tampil Data Pembeli
	public function c_tampilUser()
	{
		$this->load->helper('url');
		$data['hasil'] = $this->user_model->tampilUser();
		$this->load->view('home', $data);
	}
	// Hapus Data Pembeli
	public function c_hapusUser($id_pembeli)
	{
		$this->user_model->hapusUser($id_pembeli);
		redirect('User');
	}

	// Tampil Data Menu
	public function c_tampilMenu()
	{
		$this->load->helper('url');
		$data['hasil'] = $this->menu_model->tampilMenu();
		$this->load->view('home', $data);
	}

	// Tambah Data Pesanan
	public function c_tambahPesanan()
	{
		$this->pesanan_model->tambahPesanan();
		redirect('User');
	}

	// Tampil Data Pesanan
	public function c_tampilPesanan()
	{
		$this->load->helper('url');
		$data['hasil'] = $this->pesanan_model->tampilPesanan();
		$this->load->view('home', $data);
	}
}
