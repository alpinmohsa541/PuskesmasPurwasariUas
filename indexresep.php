<html>
<head>
<title>Database Rumah Sakit</title>
<link rel='stylesheet' href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="database.php">Home</a></div>
<h1>Isi Database Resep</h1>
<table class="table">
<thead>
<tr>
<th>No. Resep</th>
<th>Kode Periksa</th>
<th>Kode Obat</th>
<th>Tanggal Resep</th>
<th>Aturan Pakai</th>
<th>Jumlah Obat</th>
<th>
<a class="btn btn-success" href="tambahresep.php">Tambah</a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$data=mysqli_query($koneksi,"SELECT * FROM resep") or die(mysqli_error($koneksi));
foreach ($data as $baris){ ?>
<tr>
<td><?php echo $baris['no_resep'] ?></td>
<td><?php echo $baris['kd_periksa'] ?></td>
<td><?php echo $baris['kd_obat'] ?></td>
<td><?php echo $baris['tgl_resep'] ?></td>
<td><?php echo $baris['aturan_pakai'] ?></td>
<td><?php echo $baris['jumlah_obat'] ?></td>
<td>
<a class="btn btn-warning" href="updateresep.php?no_resep=<?php echo $baris['no_resep'] ?>">Update</a>
<a class="btn btn-danger" href="hapusresep.php?no_resep=<?php echo $baris['no_resep'] ?>">Hapus</a>
</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</body>
</html>