<?php
include 'koneksi.php';

$kd_pasien=$_POST['kd_pasien'];
$nama_pasien=$_POST['nama_pasien'];
$jk=$_POST['jk'];
$tempat_tinggal=$_POST['tempat_tinggal'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

$query=mysqli_query($koneksi,"INSERT INTO `pasien` (`kd_pasien`, `nama_pasien`, `jk`, `tempat_tinggal`, `tgl_lahir`, `alamat`, `usia`) VALUES ('$kd_pasien','$nama_pasien','$jk','$tempat_tinggal','$tgl_lahir','$alamat','$usia')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambahpasien.php");
}else{
    echo "Gagal";
}

?>