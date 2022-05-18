<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","puskesmas");
$username = $_POST["username"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'")
or die(mysqli_error($koneksi));

if($data = mysqli_fetch_array($query)){
    $_SESSION["username"] = $data["username"];
    $_SESSION["alert"] = "Anda berhasil login";
    header("Location: view.php");
}else{
    $_SESSION["alert"] = "Username atau password anda salah";
    header("Location: login.php");
}

?>