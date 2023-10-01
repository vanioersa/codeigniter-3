<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ubah Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class='min-vh-100 d-flex align-items-center' style="background-image: url('https://1.bp.blogspot.com/-yoqMnXBkBBI/WF6xKbZ7P9I/AAAAAAAARMU/Pgbd6wjZB3gsT8NLSkbbnvJpOLLfq7OFQCK4B/s1600/Alamat%2BSMA%2BBina%2BNusantara%2BSemarang.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="d-flex">
        <div class="col-12 bg-dark" style="width: 15%;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Info Selengkapnya</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
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
                    </li>
                </ul>
            </div>
        </div>

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

            <div class='card w-50 p-3' style="background-color: red; margin-left:25%; margin-top: 4%;">
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
                                <label for="kelas" class="form-label"><b>Kelas Dan Jurusan</b></label>
                                <select name="kelas" class="form-select">
                                    <option selected value="<?php echo $data_siswa->id_kelas ?>">
                                        <?php echo $data_siswa->id_kelas ?>
                                    </option>
                                    <?php foreach ($kelas as $row) : ?>
                                        <option value="<?php echo $row->id_kelas ?>">
                                            <?php echo $row->tingkat_kelas . ' ' . $row->jurusan_kelas ?>
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