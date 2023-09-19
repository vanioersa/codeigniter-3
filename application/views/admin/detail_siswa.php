<!DOCTYPE html>
<html>

<head>
    <title>Detail Siswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1><b>Detail Siswa</b></h1>
    </center>
    <center><?php echo anchor('admin/tambah_siswa', 'TAMBAH DATA'); ?></center>
    <table class="table">
        <thead>
            <tr>
            <th class="text-center">No</th>
			<th class="text-center">Nama</th>
			<th class="text-center">NISN</th>
			<th class="text-center">NIK</th>
			<th class="text-center">Gender</th>
			<th class="text-center">Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($siswa as $u) {
        ?>
            <tr>
            <td class="text-center"><?php echo $no++ ?></td>
			<td class="text-center"><?php echo $u->nama_siswa ?></td>
			<td class="text-center"><?php echo $u->nisn ?></td>
			<td class="text-center"><?php echo $u->nik ?></td>
			<td class="text-center"><?php echo $u->gender ?></td>
			<td class="text-center"><?php echo $u->alamat ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>