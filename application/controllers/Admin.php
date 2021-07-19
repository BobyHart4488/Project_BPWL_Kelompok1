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
	
	public function index()
	{
		$this->load->view('main');
	}
	public function createAdmin(){
		$this->admin_model->createdAdmin();
		print_r($id_admin);
		redirect('main');
	}
	public function deleteAdmin($id_admin){
		$this->admin_model->deleteDataAdmin($id_admin);
		redirect('main');
	}

	public function indexPesanan(){
		$data['hasil'] = $this->pesanan_model->getDataPesanan();
		$this->load->view('main', $data);
	}
	public function editPesanan($id_pesanan){
		$data['row'] = $this->pesanan_model->getDataUpdatePesanan($id_pesanan);
		$this->load->view('main_edit', $data);
	}
	public function updatePesanan($id_pesanan){
		$this->pesanan_model->updateDataPesanan($id_pesanan);
		redirect('main');
	}
	public function deletePesanan($id_pesanan){
		$this->pesanan_model->deleteDataPesanan($id_pesanan);
		redirect('main');
	}
}