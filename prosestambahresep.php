<?php
include 'koneksi.php';

$no_resep=$_POST['no_resep'];
$kd_periksa=$_POST['kd_periksa'];
$kd_obat=$_POST['kd_obat'];
$tgl_resep=$_POST['tgl_resep'];
$aturan_pakai=$_POST['aturan_pakai'];
$jumlah_obat=$_POST['jumlah_obat'];

$query=mysqli_query($koneksi,"INSERT INTO `resep` (`no_resep`, `kd_periksa`, `kd_obat`, `tgl_resep`, `aturan_pakai`, `jumlah_obat`) VALUES ('$no_resep','$kd_periksa','$kd_obat','$tgl_resep','$aturan_pakai','$jumlah_obat')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambahresep.php");
}else{
    echo "Gagal";
}

?>