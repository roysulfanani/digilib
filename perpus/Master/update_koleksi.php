<?php
	include "../koneksi.php";

	$id     	= $_POST['id'];
	$judul  	= $_POST['judul'];
	$nama_file 	= $_POST['nama_file'];
	$jenis 		= $_POST['jenis'];
	$konten 	= $_POST['konten'];

	$query  	= mysqli_query($koneksi, "UPDATE koleksi SET judul = '$judul', deskripsi = '$konten', namafile = '$nama_file', jenis = '$jenis' WHERE id = $id");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	if ($query) {
		header ('location:../index.php?page=koleksi');
	} else {
		echo "update gagal";
	}

?>