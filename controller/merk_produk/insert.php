<?php

	require_once '../koneksi.php';

	$namaMerk = htmlspecialchars($_POST['nama-merk']);

	if(empty($namaMerk))
		header("location: $url/views/merk_produk/");
	else{
		$query = "INSERT INTO `merk` (`nama_merk`) VALUES ('$namaMerk');";

		$insert = mysqli_query($conn, $query);

		($insert) ?	header("location: $url/views/merk_produk/") : print("$conn->error");
	}
