<?php
	include "../koneksi.php";

	$id     		= $_POST['id'];
	$nama  			= $_POST['nama_petugas'];
	$username 		= $_POST['username'];
	$pass 			= $_POST['password'];
	$level 			= $_POST['level'];

	$query  		= mysqli_query($koneksi, "UPDATE petugas SET nama = '$nama', username = '$username', level = '$level', password = '$pass' WHERE id = $id");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	if ($query) {
		header ('location:../index.php?page=petugas');
	} else {
		echo "update gagal";
	}

?>