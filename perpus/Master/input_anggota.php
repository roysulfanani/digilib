<?php
	include "../koneksi.php";
	$nama_anggota  	= $_POST['nama_anggota'];
	$email 			= $_POST['email'];
	$jeniskelamin 	= $_POST['jenis_kelamin'];
	$password		= $_POST['password'];
	
	$sql  	= mysqli_query($koneksi, "INSERT INTO anggota (IDANGGOTA, NAMAANGGOTA, EMAIL, PASSWORDAGT, JENISKELAMIN) VALUES ('$id','$nama_anggota', '$email', '$password', '$jeniskelamin')");
	
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	//var_dump($sql);

	if ($sql) {
		header ('location:../index.php?page=anggota');
	} else {
		echo "gagal";
	}
?>