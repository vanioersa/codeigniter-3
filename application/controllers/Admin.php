<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
		$this->load->library('upload');
			if($this->session->userdata('logged_in')!=true){
        	redirect(base_url().'auth');
    	}
	}
	public function index()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();
         $this->load->view('admin/indek', $data);
	}
	public function upload_img($value)
	{
		$kode = round(microtime(true) * 1000);
		$config ['upload_path'] = './images/siswa/';
		$config ['allowed_type'] = 'jpg|png|jpeg';
		$config ['max_size'] = '30000';
		$config ['file_name'] = $kode;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($value)) {
			return array(false, '' );
		} else {
			$fn = $this->upload->data();
			$nama = $fn['file_name'];
			return array(true, $nama);
		}
	}
	public function upload_img_akun($value)
	{
		$kode = round(microtime(true) * 1000);
		$config ['upload_path'] = './images/admin/';
		$config ['allowed_type'] = 'jpg|png|jpeg';
		$config ['max_size'] = '30000';
		$config ['file_name'] = $kode;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($value)) {
			return array(false, '' );
		} else {
			$fn = $this->upload->data();
			$nama = $fn['file_name'];
			return array(true, $nama);
		}
	}
	// public function aksi_ubah_akun()
	// {
	// 	$password_baru = $this->input->post('password_baru');
	// 	$konfirmasi_password = $this->input->post('konfirmasi_password');
	// 	$email = $this->input->post('email');
	// 	$username = $this->input->post('username');

	// 	$data = array(
	// 		'email' => $email,
	// 		'username' => $username,
	// 	);

	// 	if(!empty($password_baru)) {
	// 		if($password_baru === $konfirmasi_password) {
	// 			$data['password'] = md5($password_baru);
	// 		} else {
	// 		$this->session->set_flashdata('message', 'password baru dan konfirmasi password harus sama');
	// 		redirect(base_url('admin/akun'));
	// 		}
	// 	}
	// 	$this->session->set_userdata($data);
	// 	$update_result = $this ->m_model->ubah_data('admin', $data, array('id' => $this->session->userdata('id')));

	// 	if ($update_result) {
	// 		redirect(base_url('admin/akun'));
	// 	} else {
	// 		redirect(base_url('admin/akun'));
	// 	}
	// }
	public function aksi_ubah_akun()
  {
    $foto = $this->upload_img_akun('foto');
    $password_baru = $this->input->post('password_baru');
    $konfirmasi_password = $this->input->post('konfirmasi_password');
    $email = $this->input->post('email');
    $username = $this->input->post('username');

    $foto = $this->upload_img_akun('foto');
    if ($foto[0] == false) {
      $data = [
        'foto' => 'userr.png',
        'email' => $email,
        'username' => $username,
      ];
    } else {
      $data = [
        'foto' => $foto[1],
        'email' => $email,
        'username' => $username,
      ];
    }

    // jika ada password baru
    if (!empty($password_baru)) {
      // pastikan password baru dan konfirmasi password sama
      if ($password_baru === $konfirmasi_password) {
        // Hash password baru
        $data['password'] = md5($password_baru);
      } else {
        $this->session->set_flashdata('message', 'Password baru dan konfigurasi password harus sama');
        redirect(base_url('admin/akun'));
      }
    }



    // lakukan pembaruan data
    $this->session->set_userdata($data);
    $update_result = $this->m_model->ubah_data('admin', $data, array('id' => $this->session->userdata('id')));

    if ($update_result) {
      redirect(base_url('admin/akun'));
    } else {
      redirect(base_url('admin/akun'));
    }
  }
	function akun()
	{
		$data['admin'] = $this->m_model->get_by_id('admin', 'id', $this->session->userdata('id'))->result() ;
         $this->load->view('admin/akun', $data);
	}
	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/siswa', $data);
	}
	public function tambah_siswa()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	public function aksi_tambah_siswa()
	{
		$foto = $this->upload_img('foto');
		if ($foto[0] == false) {
			$data = [
				'foto' => 'User.png',
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('id_kelas'),
			];
			 $this->m_model->tambah_data('siswa', $data);
			 redirect(base_url('admin/siswa'));
		} else {
			$data = [
				'foto' => $foto[1],
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('id_kelas'),
			];
			 $this->m_model->tambah_data('siswa', $data);
			 redirect(base_url('admin/siswa'));
		}
		
	}
	public function hapus_siswa($id){
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa')); 
	}
	public function ubah_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
         $this->load->view('admin/ubah_siswa', $data);
	}
	public function aksi_ubah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('kelas'),
		];
		 $eksekusi=$this->m_model->ubah_data
		 ('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
		 if($eksekusi){
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/siswa'));
		 } else {
			$this->session->set_flashdata('error', 'gagal...');
			redirect(base_url('admin/siswa/ubah_siswa'.$this->input->post('id_siswa')));
		 }
	}
	public function keuangan()
	{
		$data['keuangan'] = $this->m_model->get_data('keuangan')->result();
		$this->load->view('admin/keuangan', $data);
	}
	public function tambah_keuangan()
	{
		$data['keuangan'] = $this->m_model->get_data('keuangan')->result();
		$this->load->view('admin/tambah_keuangan', $data);
	}
	public function aksi_tambah_keuangan()
	{
		$data = [
			'pemasukan' => $this->input->post('pemasukan'),
			'pengeluaran' => $this->input->post('pengeluaran'),
			'tanggal' => $this->input->post('tanggal'),
		];
		 $this->m_model->tambah_data('keuangan', $data);
		 redirect(base_url('admin/keuangan'));
	}
	public function hapus_keuangan($id)
	{
		$this->m_model->delete('keuangan', 'id_keuangan', $id);
		redirect(base_url('admin/keuangan')); 
	}
	public function ubah_keuangan($id)
	{
		$data['keuangan'] = $this->m_model->get_by_id('keuangan', 'id_keuangan', $id)->result();
         $this->load->view('admin/ubah_keuangan', $data);
	}
	public function aksi_ubah_keuangan()
	{
		$data = [
			'pemasukan' => $this->input->post('pemasukan'),
			'pengeluaran' => $this->input->post('pengeluaran'),
			'tanggal' => $this->input->post('tanggal'),

		];
		 $eksekusi=$this->m_model->ubah_data
		 ('keuangan', $data, array('id_keuangan'=>$this->input->post('id_keuangan')));
		 if($eksekusi){
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/keuangan'));
		 } else {
			$this->session->set_flashdata('error', 'gagal...');
			redirect(base_url('admin/keuangan/ubah_keuangan'.$this->input->post('id_keuangan')));
		 }
	}
}
?>