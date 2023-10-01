<?php
function convRupiah($value) {
    return 'Rp. ' . number_format($value);
}
function tampil_full_kelas_byid($id)
{
    $ci =& get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get('kelas');
    foreach ($result->result() as $c) {
        $stmt = $c->tingkat_kelas . ' ' . $c->jurusan_kelas;
        return $stmt;
    }
<<<<<<< HEAD
    $ci =& get_instance();
    $ci->load->database();
    $result = $ci->db->where('id', $id)->get(' mapel');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_mapel;
=======
}
function tampil_full_pembayaran_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id_siswa', $id)->get('siswa');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_siswa;
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
        return $stmt;
    }
}