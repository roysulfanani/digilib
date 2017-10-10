<?php
	include "../koneksi.php";
	session_start();
	$idpetugas 	= $_SESSION['id'];
	//var_dump($idpetugas);
	$judul  	= $_POST['judul'];
	$jenis 		= $_POST['jenis'];
	$konten 	= $_POST['konten'];

	$nama_file_buku=$_FILES['file_buku'] ['name']; // Mendapatkan nama file
 	$lokasi_buku=$_FILES['file_buku'] ['tmp_name']; 
 
	//var_dump($nama_file_buku);	
 	// Menyiapkan tempat nemapung gambar yang diupload
 	$lokasitujuan_buku="../file_buku";
 	// Menguplaod file_buku kedalam folder ./image
 	$upload_buku = move_uploaded_file($lokasi_buku,$lokasitujuan_buku."/".$nama_file_buku);
 
 	$nama_gambar=$_FILES['gambar'] ['name']; // Mendapatkan nama gambar
 	$lokasi_gambar=$_FILES['gambar'] ['tmp_name'];
	//var_dump($nama_gambar);	

 	// Menyiapkan tempat nemapung gambar yang diupload
 	$lokasitujuan_gambar="./gambar";
 	// Menguplaod gambar kedalam folder ./image
 	$upload_gambar = move_uploaded_file($lokasi_gambar,$lokasitujuan_gambar."/".$nama_gambar);



	$sql  	= mysqli_query($koneksi, "INSERT INTO koleksi (id, judul, deskripsi, namafile, jenis, idpetugas, foto_koleksi) VALUES ('','$judul', '$konten', '$nama_file_buku', '$jenis', '$idpetugas', '$nama_gambar')");
	//var_dump($sql);
	// mengalihkan ke halaman index.php
	//header("location:../index.php");
	if ($sql) {
		header ('location:../index.php?page=koleksi');
	} else {
		echo "gagal";
	}

?>