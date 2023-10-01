<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

<<<<<<< HEAD
	function __construct() 
=======
	function __construct()
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
<<<<<<< HEAD
    	if($this->session->userdata('logged_in')!=true){
    	    redirect(base_url().'auth');
    		}
	}

=======
		$this->load->library('upload');
			if($this->session->userdata('logged_in')!=true){
        	redirect(base_url().'auth');
    	}
	}
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
	public function index()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();
<<<<<<< HEAD
         $this->load->view('admin/indek', $data);
=======
		$data['keuangan'] = $this->m_model->get_data('keuangan')->num_rows();
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
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
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
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	public function aksi_tambah_siswa()
	{
<<<<<<< HEAD
		$data = [
			'nama_siswa' => $this->input->post('nama_siswa'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'id_kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'anak' => $this->input->post('anak'),
		];
		 $this->m_model->tambah_data('siswa', $data);
		 redirect(base_url('admin/siswa'));
=======
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
		
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
	}
	// public function hapus_siswa($id) 
	// {
	// 	$this->m_model->delete('siswa', 'id_siswa', $id);
	// 	redirect(base_url('admin/siswa')); 
	// }
	public function hapus_siswa($id) 
	{
		$siswa = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->$row();
		if ($siswa) {
			if ($siswa->foto !== 'user.png') {
				$file_path = './images/siswa' . $siswa->foto;

				if (file_existes($foto_path)) {
					if (unlink($file_path)) {
						$this->m_model->delete('siswa', 'id_siswa', $id);
						redirect(base_url('admin/siswa'));
					} else {
						echo "gagal menghapus file.";
					}
				} else {
					echo " file tidak ditemukan.";
				}
			} else {
				$this->m_model->delete('siswa', 'id_siswa', $id);
				redirect(base_url('admin/siswa'));
			}
		} else {
			echo "siswa tidak ditemukan.";
		}
	}
	public function ubah_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
         $this->load->view('admin/ubah_siswa', $data);
	}
	public function aksi_ubah_siswa()
	{
		$foto = $_FILES['foto']['name'];
		$foto_temp = $_FILES['foto']['tmp_name'];

		// Jika ada foto yang diunggah
		if ($foto) {
			$kode = round(microtime(true) * 1000);
			$file_name = $kode . '_' . $foto;
			$upload_path = './images/siswa/' . $file_name;

			if (move_uploaded_file($foto_temp, $upload_path)) {
				// Hapus foto lama jika ada
				$old_file = $this->m_model->get_siswa_foto_by_id($this->input->post('id_siswa'));
				if ($old_file && file_exists('./images/siswa/' . $old_file)) {
					unlink('./images/siswa/' . $old_file);
				}

				$data = [
					'foto' => $file_name,
					'nama_siswa' => $this->input->post('nama'),
					'nisn' => $this->input->post('nisn'),
					'gender' => $this->input->post('gender'),
					'id_kelas' => $this->input->post('kelas'),
				];
			} else {
				// Gagal mengunggah foto baru
				redirect(base_url('admin/ubah_siswa/' . $this->input->post('id_siswa')));
			}
		} else {
			// Jika tidak ada foto yang diunggah
			$data = [
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('kelas'),
			];
		}

		// Eksekusi dengan model ubah_data
		$eksekusi = $this->m_model->ubah_data('siswa', $data, array('id_siswa' => $this->input->post('id_siswa')));

		if ($eksekusi) {
			redirect(base_url('admin/siswa'));
		} else {
			redirect(base_url('admin/ubah_siswa' . $this->input->post('id_siswa')));
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
<<<<<<< HEAD
			'nama_siswa' => $this->input->post('nama_siswa'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'id_kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'anak' => $this->input->post('anak'),
=======
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
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc

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
<<<<<<< HEAD
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
            'sekolah' => $this->input->post('sekolah'),
            'tanggal' => $this->input->post('tanggal'),
			'mapel' => $this->input->post('mapel'),
			'jabatan' => $this->input->post('jabatan'),
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
		$this->load->view('admin/tambah_guru', $data);
	}
	public function aksi_tambah_guru()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'nomor_telfon' => $this->input->post('nomor_telfon'),
			'sekolah' => $this->input->post('sekolah'),
			'tanggal' => $this->input->post('tanggal'),
			'mapel' => $this->input->post('mapel'),
			'jabatan' => $this->input->post('jabatan'),
		];
		 $this->m_model->tambah_data('guru', $data);
		 redirect(base_url('admin/guru'));
	}
	function logout_indek()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/indek/'));
	}
=======
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
}
?>