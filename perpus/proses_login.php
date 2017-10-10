<?php
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql   = "SELECT * FROM petugas WHERE USERNAME = '$username' AND PASSWORD = '$password'";

$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query) > 0) {
	session_start();

	$user = mysqli_fetch_array($query);

	$_SESSION['id'] 		= $user['IDPETUGAS'];
	$_SESSION['username'] 	= $user['USERNAME'];
	$_SESSION['nama']     	= $user['NAMAPETUGAS'];
	$_SESSION['level']    	= $user['LEVEL'];

	header("location:index.php");
} else {
	header("location:login.php?status=gagal");
}

?>