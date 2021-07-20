<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('admin_model');
	}
	
	// Admin
	public function index()
	{
		$this->load->view('main');
	}
	// Tambah Data Admin
	public function c_tambahAdmin(){
		$this->admin_model->tambahAdmin();
		print_r($id_admin);
		redirect('Admin');
	}
	// Tampil Data Admin
	public function c_tampilAdmin(){
		$this->load->helper('url');
		$data['hasil'] = $this->admin_model->tampilAdmin();
		$this->load->view('main', $data);
	}
	//Hapus Data Admin
	public function c_hapusAdmin($id_admin){
		$this->admin_model->hapusAdmin($id_admin);
		redirect('Admin');
	}

	// Tampil Data Pesanan
	public function c_tampilPesanan(){
		$this->load->helper('url');
		$data['hasil'] = $this->pesanan_model->tampilPesanan();
		$this->load->view('main', $data);
	}
	// Tampil Data Pesanan berdasarkan ID_Pesanan
	public function c_rowUbahPesanan($id_pesanan){
		$data['row'] = $this->pesanan_model->rowUbahPesanan($id_pesanan);
		$this->load->view('main_edit', $data);
	}
	// Edit Data Pesanan
	public function c_ubahPesanan($id_pesanan){
		$this->pesanan_model->ubahPesanan($id_pesanan);
		redirect('Admin');
	}
	// Hapus Data Pesanan
	public function c_hapusPesanan($id_pesanan){
		$this->pesanan_model->hapusPesanan($id_pesanan);
		redirect('Admin');
	}

	// Tampil Data Menu
	public function c_tampilMenu(){
		$this->load->helper('url');
		$data['hasil'] = $this->menu_model->tampilMenu();
		$this->load->view('main', $data);
	}
	// Tambah Data Menu
	public function c_tambahMenu(){
		$this->menu_model->tambahMenu();
		print_r($id_menu);
		redirect('Admin');
	}
	// Tampil Data Menu berdasarkan ID_Menu
	public function c_rowUbahMenu($id_menu){
		$data['row'] = $this->menu_model->rowUbahMenu($id_menu);
		$this->load->view('main_edit', $data);
	}
	// Edit Data Menu
	public function c_ubahMenu($id_menu){
		$this->menu_model->ubahMenu($id_menu);
		redirect('Admin');
	}
	// Hapus Data Menu
	public function c_hapusMenu($id_menu){
		$this->menu_model->hapusMenu($id_menu);
		redirect('Admin');
	}
}