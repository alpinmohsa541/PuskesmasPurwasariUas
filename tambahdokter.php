<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="view.php">Home</a></div>
<div class="container">
<h1>Tambah Data Dokter</h1>
<div class="col-md-6">
<form class="" action="prosestambahdokter.php" method="post">
<label for="kd_dokter">Kode Dokter</label>
<input type="text" class="form-control" name="kd_dokter" value="">
<label for="nama_dokter">Nama Dokter</label>
<input type="text" class="form-control" name="nama_dokter" value="">
<label for="spesialis">Spesialis</label>
<input type="text" class="form-control" name="spesialis" value="">
<label for="jk">Jenis Kelamin</label>
<input type="text" class="form-control" name="jk" value="">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" value="">
<label for="email">E-Mail</label>
<input type="text" class="form-control" name="email" value="">
<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="reset" name="button">Clear</button>
</form>
</div>
</div>
</body>
</html>