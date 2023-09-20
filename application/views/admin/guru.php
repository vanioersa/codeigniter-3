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
    <!-- <h1>selamat datang <?php echo $this->session->userdata('username') ?></h1>
    <a href="<?php echo base_url('auth/logout');?>"
        class="btn btn-primary">
        loguot
</a> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="background-color: blue;">
    <ul class="navbar-nav ml-50% mt-2 mt-lg-0">
        <li class="nav-item active" style="background-color: blue;">
        <a class="dropdown-item text-white" href="<?php echo base_url('auth/logout') ?>" ><- Logout</a>
      </li>
    </ul> 
  </div>
</nav>
<nav>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Something else here</a>
    </div> 
</nav>
<div class="d-flex">
    <div class="col-12 bg-dark" style="width: 15%;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">INFO SEKOLAH</span>
            </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item"></li>
            <li>
              <a href="<?php echo base_url('admin') ?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
              <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/siswa') ?>" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Siswa</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/guru') ?>" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-user-tie"></i> <span class="ms-1 d-none d-sm-inline">Guru</span></a>
            </li>
             </ul>
        <a href="<?php echo base_url('auth/logout') ?>" class="nav-link px-0 align-middle">loguot</a>
    </div>
</div>

  <div class="container py-3 h-auto">
      <h1 style="background-color:blue; height: 60px; text-align:center; padding-top: 10px; ">GURU</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col" ><b>No.</b></th>
          <th scope="col" ><b>Nama Guru</b></th>
          <th scope="col" ><b>NIK</b></th>
          <th scope="col" ><b>Gender</b></th>
          <th scope="col" ><b>Nomor HP</b></th>
          <th scope="col" ><b>Walikelas</b></th>
          <th scope="col" ><b>Aksi</b></th>
        </tr>
      </thead>

        <tbody classs="table-grup-divider">
          <?php $no=0; foreach($guru as $row ): $no++ ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row ->nama_guru ?></td>
            <td><?php echo $row->nik ?></td>
            <td><?php echo $row->gender ?></td>
            <td><?php echo $row->nomor_telfon ?></td>
            <td><?php echo $row->tingkat_kelas. ' ' .$row->jurusan_kelas?></td>
            <td>
                <a href="<?php echo base_url('admin/ubah_guru/').$row->id_guru?>" class="btn btn-primary">Ubah</a>
                <button onclick="hapus(<?php echo $row-> id_guru ?>)"
                class="btn btn-danger">Hapus</button>
            </td>
          </tr>
           <?php endforeach ?>
        </tbody>
    </table>
      <a href="<?php echo base_url('admin/tambah_guru')?>"><button type="submit" class="btn btn-primary w-25" name="submit">Tambah</button></a>
    </div>
</div>
<script>
    function hapus(id){
        var yes = confirm('Yakin Di Hapus?');
        if(yes == true) {
            window.location.href = "<?php echo base_url('admin/hapus_guru/')?>" + id;
        }
    }
</script>
</body>
</html>
