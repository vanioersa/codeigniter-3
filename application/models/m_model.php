<?php

class M_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
<<<<<<< HEAD
    function detail_siswa( $table ) {
        return $this->db->get( $table );
    }
    
    function detail_kelas( $table ) {
        return $this->db->get( $table );
    }
    
    function getwhere( $table, $data ) {
        return $this->db->get_where( $table, $data );
=======

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
    }

    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }

<<<<<<< HEAD
    public function tambah_data( $table, $data ){
        $this->db->insert( $table, $data );
        return $this->db->insert_id( $table );
=======
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id($table);
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
    }
    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }
    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
<<<<<<< HEAD
    public function register($data)
    {
         $this->db->insert('admin', $data);
    }

    public function get_siswa() {
        $this->db->select('siswa.*, kelas.tingkat_kelas, kelas.jurusan_kelas');
            
        // Mengatur sumber data untuk query dari tabel siswa
        $this->db->from('siswa');
        
        // Menggunakan metode join untuk menggabungkan tabel siswa dengan tabel kelas
        // Berdasarkan kolom "id_kelas" yang ada di kedua tabel
        // 'left' mengindikasikan jenis join yang digunakan (left join)
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');
        // $this->db->join('sekolah', 'kelas.id_sekolah = sekolah.id', 'left');
        
        // Menjalankan query
        $query = $this->db->get();
        
        // Mengembalikan hasil query dalam bentuk array objek
        return $query->result();
    }

    public function get_guru()
    {
        $query = $this->db->get('guru');
        return $query->result();
    }
    public function ubah_data_guru($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
}
?>
=======
    public function get_siswa_foto_by_id($id_siswa)
    {
        $this->db->select('foto');
        $this->db->from('siswa');
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get();
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->foto;
        } else {
            return false;
        }
    }
    public function get_pembayaran()
    {
        $this->db->select('pembayaran.*, siswa.nama_siswa');
        $this->db->from('pembayaran');
        $this->db->join('siswa', 'pembayaran.id_siswa = siswa.id_siswa', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    function getware($tabel, $data){
        return $this->db->get_where($tabel, $data);
    }
}
?>