<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('home');
	}

	// Tambah Data Pembeli
	public function c_tambahUser(){
		$this->user_model->tambahUser();
		print_r($id_pembeli);
		redirect('User');
	}
	// Tampil Data Pembeli
	public function c_tampilUser(){
		$this->load->helper('url');
		$data['hasil'] = $this->user_model->tampilUser();
		$this->load->view('home', $data);
	}
	// Hapus Data Pembeli
	public function c_hapusUser($id_pembeli){
		$this->user_model->hapusUser($id_pembeli);
		redirect('User');
	}

	// Tampil Data Menu
	public function c_tampilMenu(){
		$this->load->helper('url');
		$data['hasil'] = $this->menu_model->tampilMenu();
		$this->load->view('home', $data);
	}

	// Tambah Data Pesanan
	public function c_tambahPesanan(){
		$this->pesanan_model->tambahPesanan();
		print_r($id_pesanan);
		redirect('User');
	}
	// Tampil Data Pesanan
	public function c_tampilPesanan(){
		$this->load->helper('url');
		$data['hasil'] = $this->pesanan_model->tampilPesanan();
		$this->load->view('home', $data);
	}
}