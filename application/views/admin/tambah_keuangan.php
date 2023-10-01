<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Daftar</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>

<body class='min-vh-100 d-flex align-items-center'>
    <div class='card w-50 m-auto p-3'>
        <h3 class='text-center '>Tambah Siswa</h3>
        <form action="<?php echo base_url('admin/aksi_tambah_keuangan') ?>" method="post" enctype="multipart/from-data" class="text-center">
            <div class="row">
                <div class="col-6">
                    <label for="pemasukan" class="form-label"><b>Pemasukan</b></label>
                    <input type="number" class="form-control" id="pemasukan" name="pemasukan">
                </div>
                <div class="col-6">
                    <label for="pengeluaran" class="form-label"><b>Pengeluaran</b></label>
                    <input type="number" class="form-control" id="pengeluaran" name="pengeluaran">
                </div>
                <divclass= style="margin-left: 25%;" class="col-6">
                    <label for="tanggal" class="form-label"><b>Tanggal</b></label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </divclass=>
                
            <br>
            <button style="margin-left: 35%; margin-top: 10px;" type="submit" class="btn btn-primary w-25" name="submit">Tambah</button>
        </form>
    </div>
</body>

</html>