<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elmio extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        if ($this->session->userdata('status') == 'login'
			&& $this->session->userdata('user') == 'admin') {
			redirect(base_url("Admin"));
        }
		else if ($this->session->userdata('status') == 'login'
		&& $this->session->userdata('user') == 'user') {
			redirect(base_url("User"));
		}
		else {
            $this->load->view('index');
        }
    }


    public function aksi_login()
    {
        $ID = $this->input->post('id');
        $password = $this->input->post('password');
        $where = array(
            'id_admin' => $ID,
            'password' => $password
        );
        $cek = $this->login_model->cek_login("admin", $where)->num_rows();
		$cek_pem = $this->login_model->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'id' => $ID,
                'status' => "login",
				'user' => "admin"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url("Admin"));

        } else if($cek_pem > 0){
			$data_session = array(
				'id' => $ID,
				'status' => "login",
				'user' => "user"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("User"));
		}
		else {
            echo "Username dan password salah !";
        }
    }

	public function register(){
		$this->load->view('register');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
