<html>
<head>
<title>Update Data Obat</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Update Data Obat</h1>
<?php 
include 'koneksi.php';
$kd_obat=$_GET['kd_obat'];
$data=mysqli_query($koneksi,"SELECT * FROM obat WHERE kd_obat='$kd_obat' ") or die(mysqli_error($koneksi));
$baris=mysqli_fetch_array($data);
?>
<div class="col-md-6">
<form class="" action="prosesupdateobat.php?kd_obat=<?php echo $kd_obat ?>" method="post">
<label for="kd_obat">Kode Obat</label>
<input type="text" class="form-control" name="kd_obat" value="<?php echo $baris['kd_obat']?>">

<label for="nama_obat">Nama</label>
<input type="text" class="form-control" name="nama_obat" value="<?php echo $baris['nama_obat']?>">

<label for="jenis">Jenis</label>
<input type="text" class="form-control" name="jenis" value="<?php echo $baris['jenis']?>">

<label for="stok">Stock</label>
<input type="number" class="form-control" name="stok" value="<?php echo $baris['stok']?>">

<label for="tgl_expired">Tanggal Expired</label>
<input type="date" class="form-control" name="tgl_expired" value="<?php echo $baris['tgl_expired']?>">

<label for="harga">Harga</label>
<input type="text" class="form-control" name="harga" value="<?php echo $baris['harga']?>">

<button class="btn btn-primary" type="submit" name="button">Simpan</button>
<button class="btn btn-primary" type="clear" name="button">Clear</button>
</form>
</div>
</div>
</body>
</html>