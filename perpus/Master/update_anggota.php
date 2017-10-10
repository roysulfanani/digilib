<?php
	include "../koneksi.php";

	$id     		= $_POST['id'];
	$nama  			= $_POST['nama_anggota'];
	$email 			= $_POST['email'];
	$jeniskelamin 	= $_POST['jenis_kelamin'];
	$pass 			= $_POST['password'];

	$query  		= mysqli_query($koneksi, "UPDATE anggota SET nama = '$nama', email = '$email', jeniskelamin = '$jeniskelamin', password = '$pass' WHERE id = $id");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	if ($query) {
		header ('location:../index.php?page=anggota');
	} else {
		echo "update gagal";
	}

?>