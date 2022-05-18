<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Tambah Data Resep</h1>
<div class="col-md-6">
<form class="" action="prosestambahresep.php" method="post">
<label for="no_resep">No. Resep</label>
<input type="text" class="form-control" name="no_resep" value="">
<label for="kd_periksa">Kode Periksa</label>
<input type="text" class="form-control" name="kd_periksa" value="">
<label for="kd_obat">Kode Obat</label>
<input type="text" class="form-control" name="kd_obat" value="">
<label for="tgl_resep">Tanggal Resep</label>
<input type="date" class="form-control" name="tgl_resep" value="">
<label for="aturan_pakai">Aturan Pakai</label>
<input type="text" class="form-control" name="aturan_pakai" value="">
<label for="jumlah_obat">Jumlah Obat</label>
<input type="number" class="form-control" name="jumlah_obat" value="">
<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="reset" name="button">Clear</button>
</form>
</div>
</div>
</body>
</html>