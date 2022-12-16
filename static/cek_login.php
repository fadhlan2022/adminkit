<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username' AND password = '$password'")
    or die(mysqli_error($konek));

$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

    if($data){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    header("location: index.php", true, 301);
    }else{
        header("location: login.php?pesan=gagal", true, 301);
	}
}else{
	header("location: login.php?pesan=gagal", true, 301);
}
?>
