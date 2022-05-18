<?php 
include 'koneksi.php';
$kd_dokterlama=$_GET['kd_dokter'];
$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

$query=mysqli_query($koneksi,"UPDATE `dokter` SET kd_dokter='$kd_dokter',nama_dokter='$nama_dokter',spesialis='$spesialis',jk='$jk',alamat='$alamat',email='$email' WHERE kd_dokter='$kd_dokterlama'")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: indexdokter.php");
}else{
    echo "Gagal";
}
?>