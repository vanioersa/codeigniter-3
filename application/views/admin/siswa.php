<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-50% mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>

  </nav>
  <div class="d-flex">
    <div class="col-12 bg-dark" style="width: 15%;">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-5 d-none d-sm-inline">INFO SEKOLAH</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
          <li class="nav-item">

          </li>
          <!-- <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-gauge-high"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        </ul>
                    </li> -->
          <!-- <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">home</span></a>

                    </li> -->
          <li>
            <a href="<?php echo base_url('admin/siswa') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Siswa</span></a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/akun') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-house-user"></i> <span class="ms-1 d-none d-sm-inline">Akun</span></a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/keuangan') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-wallet"></i> <span class="ms-1 d-none d-sm-inline">keuangan</span></a>
          </li>
          <li>
            <a style="margin-top:380px;" href="<?php echo base_url('auth/logout'); ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline"> Loguot</a>
          </li>
        </ul>
        <hr>
      </div>
    </div>

    <div class="container py-3 h-auto text-center">
      <h1 style="background-color:blue; height: 60px;">SISWA</h1>
      <table class="table">
        <thead>
          <th scope="col">No</th>
          <th scope="col">Foto Siswa</th>
          <th scope="col">Nama siswa</th>
          <th scope="col">Nisn</th>
          <th scope="col">Gender</th>
          <th scope="col">kelas</th>
          <th scope="col">Aksi</th>
          </tr>

        </thead>
        <tbody classs="table-grup-divider">
          <?php $no = 0;
          foreach ($siswa as $row) : $no++ ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><img src="<?php echo base_url('images/siswa/' . $row->foto) ?>" width="50"></td>
              <td><?php echo $row->nama_siswa ?></td>
              <td><?php echo $row->nisn ?></td>
              <td><?php echo $row->gender ?></td>
              <td><?php echo tampil_full_kelas_byid($row->id_kelas) ?></td>
              <td>
                <a href="<?php echo base_url('admin/ubah_siswa/') . $row->id_siswa ?>" class="btn btn-primary">Ubah</a>
                <button onclick="hapus(<?php echo $row->id_siswa ?>)" class="btn btn-danger">
                  Hapus
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="<?php echo base_url('admin/tambah_siswa') ?>"><button type="submit" class="btn btn-primary w-25" name="submit">Tambah</button></a>
    </div>
  </div>
  <script>
    function hapus(id) {
      var yes = confirm('Yakin Di Hapus?');
      if (yes == true) {
        window.location.href = "<?php echo base_url('admin/hapus_siswa/') ?>" + id;
      }
    }
  </script>
</body>

</html>