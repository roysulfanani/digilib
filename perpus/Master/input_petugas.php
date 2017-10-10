<?php
	include "../koneksi.php";
	$nama_petugas  	= $_POST['nama_petugas'];
	$username 		= $_POST['username'];
	$password		= $_POST['password'];
	$level 			= $_POST['level'];
	
	$sql  			= mysqli_query($koneksi, "INSERT INTO petugas (id, nama, username, password, level) VALUES ('','$nama_petugas', '$username', '$password', '$level')");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	//var_dump($sql);

	header ('location:../index.php?page=petugas');
?>