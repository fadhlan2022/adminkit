<?php
include "koneksi.php";
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$login = mysqli_query($konek, "SELECT * FROM td_user WHERE username = '$username' AND password = '$password'")
    or die(mysqli_error($konek));

$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);
if (empty($_SESSION['username'])) {
    header("location: login.php?pesan=belum_login", true, 301);
  }
?>