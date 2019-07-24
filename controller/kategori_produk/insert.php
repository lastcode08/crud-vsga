<?php

	require_once '../koneksi.php';

	$namaKategori = htmlspecialchars($_POST['nama-kategori']);

	if(empty($namaKategori))
		header("location: $url/views/kategori_produk/");
	else{
		$query = "INSERT INTO `kategori_produk` (`nama_kategori`) VALUES ('$namaKategori');";

		$insert = mysqli_query($conn, $query);

		($insert) ?	header("location: $url/views/kategori_produk/") : print("$conn->error");
	}
