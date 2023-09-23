<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ubah Siswa</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>
<body class='min-vh-100 d-flex align-items-center' style="background-image: url('https://1.bp.blogspot.com/-yoqMnXBkBBI/WF6xKbZ7P9I/AAAAAAAARMU/Pgbd6wjZB3gsT8NLSkbbnvJpOLLfq7OFQCK4B/s1600/Alamat%2BSMA%2BBina%2BNusantara%2BSemarang.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class='card w-50 m-auto p-3 text-center' style="background-color: red;">
        <h3 class='text-center'><b>Update Siswa</b></h3>
        <?php foreach ($siswa as $data_siswa) : ?>
          <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>" method="post" enctype="multipart/from-data">
            <div class="row">
                <input type="hidden" name="id_siswa" value="<?php echo $data_siswa->id_siswa ?>">
                <div class="mb-3 col-6">
                    <label for="nama_siswa" class="form-label"><b>Nama Siswa</b></label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $data_siswa->nama_siswa ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label"><b>NISN</b></label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data_siswa->nisn ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="gender" class="form-label"><b>Gender</b></label>
                    <select name="gender" class="form-select">
                        <option selected value="<?php echo $data_siswa->gender ?>">
                            <?php echo $data_siswa->gender ?>
                        </option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="tanggal" class="form-label"><b>Tanggal Lahir</b></label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data_siswa->tanggal ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="anak" class="form-label"><b>Anak Ke</b></label>
                    <input type="number" class="form-control" id="anak" name="anak" value="<?php echo $data_siswa->anak ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="alamat" class="form-label"><b>Alamat</b></label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_siswa->alamat ?>">
                </div>
                <div class="mb-3 col-6" style="margin-left: 25%;">
            <label for="kelas" class="form-label"><b>Kelas</b></label>
            <select name="kelas" class="form-select">    
              <option selected value="<?php echo $data_siswa->id_kelas ?>">
              <?php echo $data_siswa->id_kelas ?>
              </option>     
                 <?php foreach($kelas as $row):?>
              <option value="<?php echo $row->id_kelas ?>">
                <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
              </option>
                <?php endforeach ?>
            </select>
          </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25" name="submit"><b>Ubah</b></button>
            </div>    
          </form>
    </div>
        <?php endforeach ?>
</body>

</html>