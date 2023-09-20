<!DOCTYPE html>
<html>

<head>
    <title>Detail Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="background-color: blue;">
    <ul class="navbar-nav ml-50% mt-2 mt-lg-0">
        <li class="nav-item active" style="background-color: blue;">
        <a class="dropdown-item text-white" href="<?php echo base_url('admin') ?>" ><- Logout</a>
      </li>
    </ul> 
  </div>
</nav>
    <center>
        <h1><b>Detail Siswa</b></h1>
    </center>
    <!-- <center><?php echo anchor('admin/tambah_siswa', 'TAMBAH DATA'); ?></center> -->
    <table class="table">
        <thead>
            <tr>
            <th class="text-center">No</th>
			<th class="text-center">Nama</th>
			<th class="text-center">NISN</th>
			<th class="text-center">NIK</th>
			<th class="text-center">Gender</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">Kelas</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach ($siswa as $u) { ?>
            <tr>
            <td class="text-center"><?php echo $no++ ?></td>
			<td class="text-center"><?php echo $u->nama_siswa ?></td>
			<td class="text-center"><?php echo $u->nisn ?></td>
			<td class="text-center"><?php echo $u->nik ?></td>
			<td class="text-center"><?php echo $u->gender ?></td>
			<td class="text-center"><?php echo $u->alamat ?></td>
			<td class="text-center"><?php echo $u->tingkat_kelas.' '.$u->jurusan_kelas?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>