<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Akun</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

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
                    </li>
                </ul>
                <hr>
            </div>
        </div>

        <div class='card w-50 m-auto p-3'>
            <div class="text-center">
                <button class="border border-0 btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php if (!empty($row->foto)) : ?>
                        <img class="rounded-circle" height="100" width="100" src="<?php echo base64_decode($row->foto); ?>">
                    <?php else : ?>
                        <img class="rounded-circle" height="100" width="100" src="https://slabsoft.com/wp-content/uploads/2022/05/pp-wa-kosong-default.jpg" />
                    <?php endif; ?>
                </button>
            </div>
            <h1 class='text-center'><b>Akun <?php echo $this->session->userdata('username'); ?></b></h1>
            <?php $no = 0;
            foreach ($admin as $users) : $no++ ?>
                <form action="<?php echo base_url('admin/aksi_ubah_akun') ?>" method="post" enctype="multipart/from-data">
                    <div class="row text-center">
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $users->email ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="username" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $users->username ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" id="password_baru" name="password_baru">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="password" class="form-label">konfirmasi password</label>
                            <input type="text" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                        </div>
                        <div class="mb-3 col-6" style="margin-left: 25%;">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                    </div>
                    <button style="margin-left: 35%; margin-top: 25px;" type="submit" class="btn btn-primary w-25" name="submit">Ubah</button>
                </form>
            <?php endforeach ?>
        </div>
</body>

</html>