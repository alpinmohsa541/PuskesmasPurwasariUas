<?php 
include 'koneksi.php';
$kd_obatlama=$_GET['kd_obat'];
$kd_obat=$_POST['kd_obat'];
$nama_obat=$_POST['nama_obat'];
$jenis=$_POST['jenis'];
$stok=$_POST['stok'];
$tgl_expired=$_POST['tgl_expired'];
$harga=$_POST['harga'];

$query=mysqli_query($koneksi,"UPDATE `obat` 
SET kd_obat='$kd_obat',nama_obat='$nama_obat',jenis='$jenis',stok='$stok',tgl_expired='$tgl_expired',harga='$harga' 
WHERE kd_obat='$kd_obatlama'")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: indexobat.php");
}else{
    echo "Gagal";
}
?>