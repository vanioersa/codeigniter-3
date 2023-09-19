<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('m_model');
	$this->load->helper('my_helper');
    // if($this->session->userdata('loged_in')!=true){
    //     redirect(base_url().'auth');
    // }
}

	public function index()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();
		$data['mapel'] = $this->m_model->get_data('mapel')->num_rows();
         $this->load->view('admin/indek', $data);
	}
	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/siswa', $data);
	}
	public function detail_siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/detail_siswa', $data);
	}
	public function detail_kelas()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/detail_kelas', $data);
	}
	public function tambah_siswa()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
		];
		 $this->m_model->tambah_data('siswa', $data);
		 redirect(base_url('admin/siswa'));
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
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
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
}
?>