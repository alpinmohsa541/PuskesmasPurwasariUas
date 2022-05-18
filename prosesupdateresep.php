<?php 
include 'koneksi.php';
$no_reseplama=$_GET['no_resep'];
$no_resep=$_POST['no_resep'];
$kd_periksa=$_POST['kd_periksa'];
$kd_obat=$_POST['kd_obat'];
$tgl_resep=$_POST['tgl_resep'];
$aturan_pakai=$_POST['aturan_pakai'];
$jumlah_obat=$_POST['jumlah_obat'];

$query=mysqli_query($koneksi,"UPDATE `resep` SET no_resep='$no_resep',kd_periksa='$kd_periksa',kd_obat='$kd_obat',tgl_resep='$tgl_resep',aturan_pakai='$aturan_pakai',jumlah_obat='$jumlah_obat' WHERE no_resep='$no_reseplama'")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: indexresep.php");
}else{
    echo "Gagal";
}
?>