<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
=======
<html lang='en'>
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Akun</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<<<<<<< HEAD
<body>
=======
<body style="overflow: hidden;">
    <!-- <h1>selamat datang <?php echo $this->session->userdata('username') ?></h1>
    <a href="<?php echo base_url('auth/logout'); ?>"
        class="btn btn-primary">
        loguot
</a> -->

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
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
    <div class="d-flex">
        <div class="col-12 bg-dark" style="width: 15%;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Info Selengkapnya</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
<<<<<<< HEAD
                    <li>
                        <a href="<?php echo base_url('admin/siswa') ?>" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Data Siswa</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/guru') ?>" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-user-tie"></i> <span class="ms-1 d-none d-sm-inline">Data Guru</span></a>
                    </li>
                    <li style="margin-top: 440px;">
                        <a href="<?php echo base_url('auth/logout') ?>" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-right-from-bracket"></i> Logout</span></a>
=======
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
                        <a style="margin-top:385px;" href="<?php echo base_url('auth/logout'); ?>" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline"> Loguot</a>
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
                    </li>
                </ul>
            </div>
        </div>
<<<<<<< HEAD

        <div style="width:100%;">
            <nav class="navbar navbar-expand-lg navbar bg-dark" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding: 2px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo base_url('tampilan'); ?>">
                                    <font color="white"><i class="fa-solid fa-house-chimney"></i> Home</font>
                                </a>
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
                </div>
            </nav>
            <div class="text-center">
                <h1><b>Selamat Datang <?php echo $this->session->userdata('username') ?></b></h1>
            </div>
            <hr>
            <div class="row mb-sm-0" style="margin-right: 25px;">
                <div class="col" style="margin-left: 25px;">
                    <div class="card text-bg-secondary">
                        <div class="card-header">Jumlah Siswa</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $siswa ?> <i class="fa-regular fa-user"></i></i></p>
                            <a href="<?php echo base_url('admin/detail_siswa') ?>" class="btn btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-secondary">
                        <div class="card-header">Jumlah Guru</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $guru ?> <i class="fa-solid fa-user-tie"></i></p>
                            <a href="admin/detail_guru" class="btn btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-secondary">
                        <div class="card-header">Jumlah Kelas</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $kelas ?> <i class="fa-solid fa-house-chimney-user"></i></p>
                            <a href="admin/detail_kelas" class="btn btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
=======
>>>>>>> 36931d215723b10d87c9922f09bc6724cc787bbc
