<html>
<head>
<title>Database Rumah Sakit</title>
<link rel='stylesheet' href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="view.php">Home</a></div>
<h1>Isi Database Dokter</h1>
<table class="table">
<thead>
<tr>
<th>Kode Dokter</th>
<th>Nama</th>
<th>Spesialis</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>E-Mail</th>
<th>
<a class="btn btn-success" href="tambahdokter.php">Tambah</a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$data=mysqli_query($koneksi,"SELECT * FROM dokter") or die(mysqli_error($koneksi));
foreach ($data as $baris){ ?>
<tr>
<td><?php echo $baris['kd_dokter'] ?></td>
<td><?php echo $baris['nama_dokter'] ?></td>
<td><?php echo $baris['spesialis'] ?></td>
<td><?php echo $baris['jk'] ?></td>
<td><?php echo $baris['alamat'] ?></td>
<td><?php echo $baris['email'] ?></td>
<td>
<a class="btn btn-warning" href="updatedokter.php?kd_dokter=<?php echo $baris['kd_dokter'] ?>">Update</a>
<a class="btn btn-danger" href="hapusdokter.php?kd_dokter=<?php echo $baris['kd_dokter'] ?>">Hapus</a>
</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</body>
</html>