<?php 
include 'koneksi.php';
$kd_pasienlama=$_GET['kd_pasien'];
$kd_pasien=$_POST['kd_pasien'];
$nama_pasien=$_POST['nama_pasien'];
$jk=$_POST['jk'];
$tempat_tinggal=$_POST['tempat_tinggal'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

$query=mysqli_query($koneksi,"UPDATE `pasien` SET kd_pasien='$kd_pasien',nama_pasien='$nama_pasien',jk='$jk',tempat_tinggal='$tempat_tinggal',tgl_lahir='$tgl_lahir',alamat='$alamat',usia='$usia' WHERE kd_pasien='$kd_pasienlama'")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: indexpasien.php");
}else{
    echo "Gagal";
}
?>