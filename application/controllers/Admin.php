<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('menu_model');
		$this->load->model('pesanan_model');
		$this->load->model('user_model');
	}
	
	// Admin
	public function index()
	{
		$this->load->view('main');
	}

	public function users()
	{
		$this->load->view('users');
	}

	public function admins()
	{
		$this->load->view('admins');
	}

	public function admin_input()
	{
		$this->load->view('admin_input');
	}

	public function orders()
	{
		$this->load->view('orders');
	}

	public function menus()
	{
		$this->load->view('menus');
	}

	public function menu_input()
	{
		$this->load->view('menu_input');
	}

	// Tambah Data Admin
	public function c_tambahAdmin(){
		$this->admin_model->tambahAdmin();
		print_r($id_admin);
		redirect('Admin/admins');
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
		redirect('Admin/admins');
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