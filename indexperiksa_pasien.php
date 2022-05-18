<html>
<head>
<title>Database Rumah Sakit</title>
<link rel='stylesheet' href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="view.php">Home</a></div>
<h1>Isi Database Periksa Pasien</h1>
<table class="table">
<thead>
<tr>
<th>Kode Periksa</th>
<th>Kode Dokter</th>
<th>Kode Pasien</th>
<th>Diagnosa</th>
<th>Tindakan</th>
<th>Biaya</th>
<th>
<a class="btn btn-success" href="tambahperiksa_pasien.php">Tambah</a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$data=mysqli_query($koneksi,"SELECT * FROM periksa_pasien") or die(mysqli_error($koneksi));
foreach ($data as $baris){ ?>
<tr>
<td><?php echo $baris['kd_periksa'] ?></td>
<td><?php echo $baris['kd_dokter'] ?></td>
<td><?php echo $baris['kd_pasien'] ?></td>
<td><?php echo $baris['diagnosa'] ?></td>
<td><?php echo $baris['tindakan'] ?></td>
<td><?php echo $baris['biaya'] ?></td>
<td>
<a class="btn btn-warning" href="updateperiksa_pasien.php?kd_periksa=<?php echo $baris['kd_periksa'] ?>">Update</a>
<a class="btn btn-danger" href="hapusperiksa_pasien.php?kd_periksa=<?php echo $baris['kd_periksa'] ?>">Hapus</a>
</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</body>
</html>