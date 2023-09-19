<!DOCTYPE html>
<html>

<head>
    <title>Detail Siswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center><h1><b>Detail Kelas</b></h1></center>

    <table class="table">
        <thead>
            <tr>
            <th class="text-center">No</th>
			<th class="text-center">Kelas</th>
			<th class="text-center">Jurusan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($kelas as $u) {
        ?>
            <tr>
            <td class="text-center"><?php echo $no++ ?></td>
			<td class="text-center"><?php echo $u->tingkat_kelas ?></td>
			<td class="text-center"><?php echo $u->jurusan_kelas ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>