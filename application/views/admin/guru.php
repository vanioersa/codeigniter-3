<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>selamat datang <?php echo $this->session->userdata('username') ?></h1>
    <a href="<?php echo base_url('auth/logout');?>"
        class="btn btn-primary">
        loguot
</a> -->

<nav class="navbar navbar-expand-lg navbar bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding: 2px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('tampilan');?>"><font color="white"><i class="fa-solid fa-house-chimney"></i> Home</font></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form style="margin-right: 20px;" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
<div class="d-flex">
    <div class="col-12 bg-dark" style="width: 15%;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">Info Selengkapnya</span>
            </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item"></li>
            <li>
              <a href="<?php echo base_url('admin') ?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
              <i class="fa-solid fa-arrow-left"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/siswa') ?>" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Data Siswa</span></a>
            </li>
            <!-- <li>
                <a href="<?php echo base_url('admin/guru') ?>" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-user-tie"></i> <span class="ms-1 d-none d-sm-inline">Guru</span></a>
            </li> -->
            <li style="margin-top: 375px;">
                <a href="<?php echo base_url('auth/logout') ?>" class="nav-link px-0 align-middle">
                <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-right-from-bracket"></i> Logout</span></a>
            </li>
        </ul>
    </div>
</div>

  <div class="container py-3 h-auto">
      <h1 style="background-color:blue; height: 60px; text-align:center; padding-top: 10px; ">GURU</h1>
      <table class="table table-info">
      <thead>
        <br>
      <a style="margin-left: 75%;" href="<?php echo base_url('admin/tambah_guru')?>"><button type="submit" class="btn btn-primary w-25" name="submit"><i class="fa-solid fa-folder-plus"></i> Tambah</button></a>
      <br><br>
        <center>
        <tr>
          <th  style="text-align: center;" scope="col" ><b>No.</b></th>
          <th  style="text-align: center;" scope="col" ><b>Nama Guru</b></th>
          <th  style="text-align: center;" scope="col" ><b>NIK</b></th>
          <th  style="text-align: center;" scope="col" ><b>Gender</b></th>
          <th  style="text-align: center;" scope="col" ><b>Nomor HP</b></th>
          <th  style="text-align: center;" scope="col" ><b>Asal Sekolah</b></th>
          <th  style="text-align: center;" scope="col" ><b>Tanggal Lahir</b></th>
          <th  style="text-align: center;" scope="col" ><b>Guru Mapel</b></th>
          <th  style="text-align: center;" scope="col" ><b>Jabatan</b></th>
          <th  style="text-align: center;" scope="col" ><b>Aksi</b></th>
        </tr>
      </thead>

        <tbody classs="table-grup-divider">
          <?php $no=0; foreach($guru as $row ): $no++ ?>
          <tr>
            <td  style="text-align: center;"><b><?php echo $no ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row ->nama_guru ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->nik ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->gender ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->nomor_telfon ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->sekolah ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->tanggal ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->mapel ?></b></td>
            <td  style="text-align: center;"><b><?php echo $row->jabatan ?></b></td>
            <td  style="text-align: center;">
                <a href="<?php echo base_url('admin/ubah_guru/').$row->id_guru?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                <button style="margin-left: 10px;" onclick="hapus(<?php echo $row-> id_guru ?>)"
                class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
            </td>
          </tr>
          </center>
           <?php endforeach ?>
        </tbody>
    </table>
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
