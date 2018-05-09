<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('loginmodel');

	}

	// List all your items
	public function index()
	{
		$this->load->view('form/login');
	}

	function aksi_login(){
		$email= $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->loginmodel->cek_login("user",$where)->num_rows();
		if($cek > 0)
		{
 
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Cilin"));
 
		}else
		{
            $message = "Either the email or password (or both) are incorrect.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('Login','refresh');
		}
	}

	function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}

