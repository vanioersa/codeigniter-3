<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="overflow: hidden;">
  <!-- <h1>selamat datang <?php echo $this->session->userdata('username') ?></h1>
    <a href="<?php echo base_url('auth/logout'); ?>"
        class="btn btn-primary">
        loguot
</a> -->

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
          <li>
            <a href="<?php echo base_url('admin') ?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
              <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">home</span></a>
          </li>
          <li>
            <a href="<?php echo base_url('keuangan/pembayaran') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-money-bill-wave"></i> <span class="ms-1 d-none d-sm-inline">Pembayaran</span></a>
          </li>
          <!-- <li>
                        <a href="<?php echo base_url('admin/akun') ?>" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-house-user"></i> <span class="ms-1 d-none d-sm-inline">Akun</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/keuangan') ?>" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-wallet"></i> <span class="ms-1 d-none d-sm-inline">keuangan</span></a>
                    </li> -->
          <li>
            <a style="margin-top: 470px;" href="<?php echo base_url('auth/logout'); ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline"> Loguot</a>
          </li>
        </ul>
        <hr>
      </div>
    </div>

    <div class="container py-1 h-auto text-center">
      <nav class="navbar navbar-expand-lg navbar" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-50% mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="tampilan"><i class="fa-solid fa-house-chimney-user"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-link"></i> Link</a>
            </li>
          </ul>
        </div>
      </nav>
      <h1 style="background-color:blue; height: 60px;">Pembayaran</h1>
      <table class="table">
        <thead>
          <th scope="col">No</th>
          <th scope="col">Nama siswa</th>
          <th scope="col">Jenis Pembayaran</th>
          <th scope="col">Total</th>
          <th scope="col">Aksi</th>
          </tr>

        </thead>
        <tbody classs="table-grup-divider">
          <?php $no = 0;
          foreach ($pembayaran as $row) : $no++ ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $row->nama_siswa ?></td>
              <td><?php echo $row->jenis_pembayaran ?></td>
              <td><?php echo $row->total_pembayaran ?></td>
              <td>
                <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id_siswa ?>" class="btn btn-primary">Ubah</a>
                <button onclick="hapus(<?php echo $row->id_siswa ?>)" class="btn btn-danger">
                  Hapus
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="<?php echo base_url('keuangan/tambah_pembayaran') ?>"><button type="submit" class="btn btn-primary w-25" name="submit">Tambah</button></a>
    </div>
  </div>
  <script>
    function hapus(id) {
      var yes = confirm('Yakin Di Hapus?');
      if (yes == true) {
        window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/') ?>" + id;
      }
    }
  </script>
</body>

</html>