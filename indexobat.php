<html>
<head>
<title>Database Rumah Sakit</title>
<link rel='stylesheet' href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="view.php">Home</a></div>
<h1>Isi Database Obat</h1>
<table class="table">
<thead>
<tr>
<th>Kode Obat</th>
<th>Nama</th>
<th>Jenis</th>
<th>Stock</th>
<th>Tanggal Expired</th>
<th>Harga</th>
<th>
<a class="btn btn-success" href="tambahobat.php">Tambah</a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$data=mysqli_query($koneksi,"SELECT * FROM obat") or die(mysqli_error($koneksi));
foreach ($data as $baris){ ?>
<tr>
<td><?php echo $baris['kd_obat'] ?></td>
<td><?php echo $baris['nama_obat'] ?></td>
<td><?php echo $baris['jenis'] ?></td>
<td><?php echo $baris['stok'] ?></td>
<td><?php echo $baris['tgl_expired'] ?></td>
<td><?php echo $baris['harga'] ?></td>
<td>
<a class="btn btn-warning" href="updateobat.php?kd_obat=<?php echo $baris['kd_obat'] ?>">Update</a>
<a class="btn btn-danger" href="hapusobat.php?kd_obat=<?php echo $baris['kd_obat'] ?>">Hapus</a>
</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</body>
</html>