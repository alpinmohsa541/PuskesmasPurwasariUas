<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Tambah Data Obat</h1>
<div class="col-md-6">
<form class="" action="prosestambahobat.php" method="post">
<label for="kd_obat">Kode Obat</label>
<input type="text" class="form-control" name="kd_obat" value="">
<label for="nama_obat">Nama Obat</label>
<input type="text" class="form-control" name="nama_obat" value="">
<label for="jenis">Jenis</label>
<input type="text" class="form-control" name="jenis" value="">
<label for="stok">Stock</label>
<input type="number" class="form-control" name="stok" value="">
<label for="tgl_expired">Tanggal Expired</label>
<input type="date" class="form-control" name="tgl_expired" value="">
<label for="harga">Harga</label>
<input type="text" class="form-control" name="harga" value="">
<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="reset" name="clear">Clear</button>
</form>
</div>
</div>
</body>
</html>