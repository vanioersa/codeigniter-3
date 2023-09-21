<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="background-color: blue;">
    <ul class="navbar-nav ml-50% mt-2 mt-lg-0">
        <li class="nav-item active" style="background-color: blue;">
        <a class="dropdown-item text-white" href="<?php echo base_url('tampilan') ?>" >< Kembali Ke Halaman Utama</a>
      </li>
    </ul> 
  </div>
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
                <span class="fs-5 d-none d-sm-inline">Info Selengkapnya</span>
            </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item"></li>
                    <li>
                        <a href="<?php echo base_url('auth/logout') ?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
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
    </div>
</div>

<div class="row col-sm-10 mb-sm-0" style="margin-top: 30px;">
    <div class="col" style="margin-left: 25px;">
        <div class="card text-bg-secondary mb-3">
        <div class="card-header">Jumlah Siswa</div>
            <div class="card-body">
                <p class="card-text"><?php echo $siswa ?>  <i class="fa-regular fa-user"></i></i></p>
                <a href="<?php echo base_url('admin/detail_siswa')?>" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-secondary mb-3">
        <div class="card-header">Jumlah Guru</div>
            <div class="card-body">
                <p class="card-text"><?php echo $guru ?>  <i class="fa-solid fa-user-tie"></i></p>
                <a href="admin/detail_guru" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-secondary mb-3">
        <div class="card-header">Jumlah Kelas</div>
            <div class="card-body">
                <p class="card-text"><?php echo $kelas ?>  <i class="fa-solid fa-door-closed"></i></i></p>
                <a href="admin/detail_kelas" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-secondary mb-3">
        <div class="card-header">Jumlah Mapel</div>
            <div class="card-body">
                <p class="card-text"><?php echo $guru ?>  <i class="fa-solid fa-book-atlas"></i></i></p>
                <a href="admin/detail_mapel" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>


</div>