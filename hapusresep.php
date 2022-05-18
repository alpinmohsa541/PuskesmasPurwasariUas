<?php
include 'koneksi.php';
$no_resep=$_GET['no_resep'];

$query=mysqli_query($koneksi,"DELETE FROM resep WHERE no_resep='$no_resep' ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: indexresep.php");
}else{
    echo "Gagal";
}
?>