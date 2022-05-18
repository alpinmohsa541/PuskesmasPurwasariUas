<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Tambah Data Pasien</h1>
<div class="col-md-6">
<form class="" action="prosestambahpasien.php" method="post">
<label for="kd_pasien">Kode Pasien</label>
<input type="number" class="form-control" name="kd_pasien" value="">
<label for="nama_pasien">Nama Pasien</label>
<input type="text" class="form-control" name="nama_pasien" value="">
<label for="jk">Jenis Kelamin</label>
<input type="text" class="form-control" name="jk" value="">
<label for="tempat_tinggal">Tempat Tinggal</label>
<input type="text" class="form-control" name="tempat_tinggal" value="">
<label for="tgl_lahir">Tanggal Lahir</label>
<input type="date" class="form-control" name="tgl_lahir" value="">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" value="">
<label for="usia">Usia</label>
<input type="text" class="form-control" name="usia" value="">
<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="reset" name="button">Clear</button>
</form>
</div>
</div>
</body>
</html>