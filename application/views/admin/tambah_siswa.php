<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Tambah Siswa</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>
<body class='min-vh-100 d-flex align-items-center' style="background-image: url('https://1.bp.blogspot.com/-yoqMnXBkBBI/WF6xKbZ7P9I/AAAAAAAARMU/Pgbd6wjZB3gsT8NLSkbbnvJpOLLfq7OFQCK4B/s1600/Alamat%2BSMA%2BBina%2BNusantara%2BSemarang.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class='card w-50 m-auto p-3' style="background-color: green;">
    <h3 class='text-center'><b>Tambah Siswa</b></h3>
    <form action="<?php echo base_url('admin/aksi_tambah_siswa') ?>" method="post" enctype="multipart/from-data">
      <div class="row text-center">
          <div class="mb-3 col-6">
            <label for="nama_siswa" class="form-label"><b>Nama Siswa</b></label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
          </div>
          <div class="mb-3 col-6">
            <label for="nisn" class="form-label"><b>NISN</b></label>
            <input type="text" class="form-control" id="nisn" name="nisn">
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
            <label for="tanggal" class="form-label"><b>Tanggal Lahir</b></label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="mb-3 col-6">
            <label for="anak" class="form-label"><b>Anak Ke</b></label>
            <input type="number" class="form-control" id="anak" name="anak">
          </div>
          <div class="mb-3 col-6">
            <label for="alamat" class="form-label"><b>Alamat</b></label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="mb-3 col-6" style="margin-left: 25%;">
            <label for="kelas" class="form-label"><b>Kelas</b></label>
            <select name="kelas" class="form-select">    
              <option selected>
              </option>     
                 <?php foreach($kelas as $row):?>
              <option value="<?php echo $row->id_kelas ?>">
                <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
              </option>
                <?php endforeach ?>
            </select>
          </div>
          
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary w-25" name="submit"><b>Tambah</b></button>
          </div>
      </div>
    </form>
  </div>
</body>

</html>