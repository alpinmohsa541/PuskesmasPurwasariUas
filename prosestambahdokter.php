<?php
include 'koneksi.php';

$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

$query=mysqli_query($koneksi,"INSERT INTO `dokter` (`kd_dokter`, `nama_dokter`, `spesialis`, `jk`, `alamat`, `email`) VALUES ('$kd_dokter','$nama_dokter','$spesialis','$jk','$alamat','$email')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambahdokter.php");
}else{
    echo "Gagal";
}

?>