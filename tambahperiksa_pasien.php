<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Tambah Data Periksa Pasien</h1>
<div class="col-md-6">
<form class="" action="prosestambahperiksa_pasien.php" method="post">
<label for="kd_periksa">Kode Periksa</label>
<input type="text" class="form-control" name="kd_periksa" value="">
<label for="kd_dokter">Kode Dokter</label>
<input type="text" class="form-control" name="kd_dokter" value="">
<label for="kd_pasien">Kode Pasien</label>
<input type="text" class="form-control" name="kd_pasien" value="">
<label for="diagnosa">Diagnosa</label>
<input type="text" class="form-control" name="diagnosa" value="">
<label for="tindakan">Tindakan</label>
<input type="date" class="form-control" name="tindakan" value="">
<label for="biaya">biaya</label>
<input type="text" class="form-control" name="biaya" value="">
<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="reset" name="button">Clear</button>
</form>
</div>
</div>
</body>
</html>