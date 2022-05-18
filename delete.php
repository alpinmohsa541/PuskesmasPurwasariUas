<?php
include 'koneksi.php';
$kd = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM rumahsakit WHERE kd='$kd'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: view.php");
}else{
    echo "Gagal Menghapus";
}

?>