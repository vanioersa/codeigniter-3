<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Daftar</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>

<body class='min-vh-100 d-flex align-items-center'>
  <div class='card w-50 m-auto p-3'>
    <h3 class='text-center '>Tambah Siswa</h3>
    <form action="<?php echo base_url('admin/aksi_tambah_siswa') ?>" method="post" enctype="multipart/from-data">
      <div class="d-flex">
        <div>
          <div class="mb-3 col-11">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3 col-11">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn">
          </div>
          <div class="mb-3 col-11">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
          </div>
        </div>
        <div class="mb-3 col-6">
          <label for="gender" class="form-label">Gender</label>
          <select name="gender" class="form-select">
            <option selected>pilih gender</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <div class="mb-3 col-11">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="mb-3 col-11">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" class="form-select">    
              <option selected value="<?php echo $data_siswa->id_kelas?>">
                <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
              </option>     
                 <?php foreach($kelas as $row):?>
              <option value="<?php echo $row->id ?>">
                <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
              </option>
                <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary w-25" name="submit">Tambah</button>
    </form>
  </div>
</body>

</html>