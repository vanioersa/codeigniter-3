<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	
	}
	public function index()
	{
		$this->load->view('auth/login');
	}
	
	public function fungsi_login() {

		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		// vaiable data berfungsi untuk mengambil yg diinputkan
		$data = ['email' => $email,];
		$query = $this->m_model->getwhere('admin', $data);
		// result berfngsi menjalankan query nya
		$result = $query->row_array();
	  
	  
		if (!empty($result)  && md5($password) === $result['password']) 
		{
		  $data = [
			'logged_in' => TRUE,
			// yg didalam array ngambil dari database
			'email'     => $result['email'],
			'nama_pengguna'  => $result['nama_pengguna'],
			'password'  => $result['password'],
			'role'      => $result['role'],
		  ];
		  // session dibawah berfngsi untk penampungan sementara
		  $this->session->set_userdata($data);
		  // validasi dbwh mengecek apakah role itu "admin"
		  if ($this->session->userdata('role') == 'admin') {
			redirect(base_url()."admin");
		  } elseif($this->session->userdata('role') == 'keuangan') {
			redirect(base_url()."keuangan");
		  } else {
			redirect(base_url('auth'));
		  }
		} else {
		  redirect(base_url()."auth");
		}
	  }
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
<<<<<<< HEAD
	public function register() 
	{
		$this->load->view('auth/register');
	}
}
=======
?>
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
