<?php

class M_model extends CI_Model {
    function get_data( $table ) {
        return $this->db->get( $table );
    }
    function detail_siswa( $table ) {
        return $this->db->get( $table );
    }
    
    function detail_kelas( $table ) {
        return $this->db->get( $table );
    }
    
    function getwhere( $table, $data ) {
        return $this->db->get_where( $table, $data );
    }

    public function delete( $table, $field, $id ) {
        $data = $this->db->delete( $table, array( $field => $id ) );
        return $data;
    }

    public function tambah_data( $table, $data ){
        $this->db->insert( $table, $data );
        return $this->db->insert_id( $table );
    }
    public function get_by_id($tabel, $id_column, $id)
    {
        $data=$this->db->where($id_column, $id)->get($tabel);
        return $data;
    }
    public function ubah_data($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
    public function register($data)
    {
         $this->db->insert('admin', $data);
    }

    public function get_siswa() {
        $this->db->select('siswa.*, kelas.tingkat_kelas, kelas.jurusan_kelas, kelas.tahun');
            
        // Mengatur sumber data untuk query dari tabel siswa
        $this->db->from('siswa');
        
        // Menggunakan metode join untuk menggabungkan tabel siswa dengan tabel kelas
        // Berdasarkan kolom "id_kelas" yang ada di kedua tabel
        // 'left' mengindikasikan jenis join yang digunakan (left join)
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id', 'left');
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

