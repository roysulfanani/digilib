<?php
	include "../koneksi.php";

	$id  = trim($_GET['id']);
	//var_dump($kon);

	$query  	= mysqli_query($koneksi, "DELETE FROM anggota WHERE id = $id");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");

	if ($query) {
		header ('location:../index.php?page=anggota');
	} else {
		echo "delete gagal";
	}

?>