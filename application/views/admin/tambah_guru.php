<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Tambah Guru</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>
<body class='min-vh-100 d-flex align-items-center' style="background-image: url('https://1.bp.blogspot.com/-yoqMnXBkBBI/WF6xKbZ7P9I/AAAAAAAARMU/Pgbd6wjZB3gsT8NLSkbbnvJpOLLfq7OFQCK4B/s1600/Alamat%2BSMA%2BBina%2BNusantara%2BSemarang.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class='card w-50 m-auto p-3' style="background-color: red;">
    <h3 class='text-center'><b>Tambah Guru</b></h3>
    <form action="<?php echo base_url('admin/aksi_tambah_Guru') ?>" method="post" enctype="multipart/from-data">
      <div class="row text-center">
          <div class="mb-3 col-6">
            <label for="nama_guru" class="form-label"><b>Nama Guru</b></label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru">
          </div>
          <div class="mb-3 col-6">
            <label for="nik" class="form-label"><b>NIK</b></label>
            <input type="text" class="form-control" id="nik" name="nik">
          </div>
          <div class="mb-3 col-6">
            <label for="gender" class="form-label"><b>Gender</b></label>
            <select name="gender" class="form-select">
              <option selected>pilih gender</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3 col-6">
            <label for="nomor_telfon" class="form-label"><b>Nomor HP</b></label>
            <input type="text" class="form-control" id="nomor_telfon" name="nomor_telfon">
          </div>
          <div class="mb-3 col-6">
            <label for="sekolah" class="form-label"><b>Asal Sekolah</b></label>
            <input type="text" class="form-control" id="sekolah" name="sekolah">
          </div>
          <div class="mb-3 col-6">
            <label for="tanggal" class="form-label"><b>Tanggal Lahir</b></label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="mb-3 col-6">
            <label for="nama_mapel" class="form-label"><b>Guru Mapel</b></label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
          </div>
          
          <div class="mb-3 col-6">
            <label for="jabatan" class="form-label"><b>Jabatan</b></label>
            <select name="jabatan" class="form-select">
              <option selected>pilih Jabatan</option>
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Kepala Jurusan">Kepala Jurusan</option>
                <option value="Sekertaris">Sekertaris</option>
                <option value="Bendahara">Bendahara</option>
                <option value="Anggota">Anggota</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary w-25" name="submit"><b>Tambah</b></button>
          </div>
    </form>
  </div>
</body>
</html>