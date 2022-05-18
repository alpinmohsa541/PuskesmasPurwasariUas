<html>
<head>
<title>Database Rumah Sakit</title>
<link rel='stylesheet' href="styles.css">
</head>
<body>
<div class="container">
<div style="text-align:right"><a href="view.php">Home</a></div>
<h1>Isi Database Pasien</h1>
<table class="table">
<thead>
<tr>
<th>Kode Pasien</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Tempat Tinggal</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Usia</th>
<th>
<a class="btn btn-success" href="tambahpasien.php">Tambah</a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$data=mysqli_query($koneksi,"SELECT * FROM pasien") or die(mysqli_error($koneksi));
foreach ($data as $baris){ ?>
<tr>
<td><?php echo $baris['kd_pasien'] ?></td>
<td><?php echo $baris['nama_pasien'] ?></td>
<td><?php echo $baris['jk'] ?></td>
<td><?php echo $baris['tempat_tinggal'] ?></td>
<td><?php echo $baris['tgl_lahir'] ?></td>
<td><?php echo $baris['alamat'] ?></td>
<td><?php echo $baris['usia'] ?></td>
<td>
<a class="btn btn-warning" href="updatepasien.php?kd_pasien=<?php echo $baris['kd_pasien'] ?>">Update</a>
<a class="btn btn-danger" href="hapuspasien.php?kd_pasien=<?php echo $baris['kd_pasien'] ?>">Hapus</a>
</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</body>
</html>