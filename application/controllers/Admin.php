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
		$data['siswa'] = $this->m_model->get_siswa();
		$this->load->view('admin/siswa', $data);
	}
	public function detail_siswa()
	{
		$data['siswa'] = $this->m_model->get_siswa('siswa');
		$this->load->view('admin/detail_siswa', $data);
	}
	public function detail_kelas()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/detail_kelas', $data);
	}
	public function detail_guru()
	{
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('admin/detail_guru', $data);
	}
	public function detail_mapel()
	{
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('admin/detail_mapel', $data);
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
			'id_kelas' => $this->input->post('kelas'),
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
	public function guru()
	{
		$data['guru'] = $this->m_model->get_guru();
		$this->load->view('admin/guru', $data);
	}
	public function aksi_ubah_guru()
    {
        $data = array(
            'nama_guru' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'nomor_telfon' => $this->input->post('nomor_telfon'),
            'id_kelas' => $this->input->post('id_kelas'),
        );

        $eksekusi = $this->m_model->ubah_data
        ('guru', $data, array('id_guru' => $this->input->post('id_guru')));
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/guru'));
        } else {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('admin/guru/' . $this->input->post('id_guru')));
        }
    }
	public function ubah_guru($id)
	{
		$data['guru'] = $this->m_model->get_by_id('guru', 'id_guru', $id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/ubah_guru', $data);
	}
	public function hapus_guru($id){
		$this->m_model->delete('guru', 'id_guru', $id);
		redirect(base_url('admin/guru')); 
	}
	public function tambah_guru()
	{
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	public function aksi_tambah_guru()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'nomor_telfon' => $this->input->post('no_telephone'),
			'id_kelas' => $this->input->post('id_kelas'),
		];
		 $this->m_model->tambah_data('guru', $data);
		 redirect(base_url('admin/guru'));
	}
}
?>