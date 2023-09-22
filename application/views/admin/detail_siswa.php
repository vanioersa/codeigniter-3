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
    <table class="table table-danger">
        <thead>
            <tr>
            <th class="text-center"><b>No</b></th>
			<th class="text-center"><b>Nama</b></th>
			<th class="text-center"><b>Gender</b></th>
			<th class="text-center"><b>Tanggal Lahir</b></th>
			<th class="text-center"><b>Anak ke</b></th>
			<th class="text-center"><b>Alamat</b></th>
			<th class="text-center"><b>Kelas</b></th>
			<th class="text-center"><b>Jurusan</b></th>
			<th class="text-center"><b>Tahun Ajaran</b></th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach ($siswa as $u) { ?>
            <tr>
            <td class="text-center"><b><?php echo $no++ ?></b></td>
			<td class="text-center"><b><?php echo $u->nama_siswa ?></b></td>
			<td class="text-center"><b><?php echo $u->gender ?></b></td>
			<td class="text-center"><b><?php echo $u->tanggal?></b></td>
			<td class="text-center"><b><?php echo $u->anak?></b></td>
			<td class="text-center"><b><?php echo $u->alamat ?></b></td>
			<td class="text-center"><b><?php echo $u->tingkat_kelas?></b></td>
			<td class="text-center"><b><?php echo $u->jurusan_kelas?></b></td>
			<td class="text-center"><b><?php echo $u->tahun?></b></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>