<?php
include 'koneksi.php';

$kd_obat=$_POST['kd_obat'];
$nama_obat=$_POST['nama_obat'];
$jenis=$_POST['jenis'];
$stok=$_POST['stok'];
$tgl_expired=$_POST['tgl_expired'];
$harga=$_POST['harga'];

$query=mysqli_query($koneksi,"INSERT INTO `obat` (`kd_obat`, `nama_obat`, `jenis`, `stok`, `tgl_expired`, `harga`) 
VALUES ('$kd_obat','$nama_obat','$jenis','$stok','$tgl_expired','$harga')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambahobat.php");
}else{
    echo "Gagal";
}

?>