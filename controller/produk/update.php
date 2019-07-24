<?php 
	require_once '../koneksi.php';

	$nama = htmlspecialchars($_POST['nama-produk']);
	$kategori = htmlspecialchars($_POST['kategori-produk']);
	$warna = htmlspecialchars($_POST['warna-produk']);
	$merk = htmlspecialchars($_POST['merk-produk']);
	$jumlah = htmlspecialchars($_POST['jumlah-produk']);
	$harga = htmlspecialchars($_POST['harga-produk']);
	$id = htmlspecialchars($_POST['id']);

	if(empty($nama) || empty($kategori) || empty($warna) || empty($merk) || empty($jumlah) || empty($harga) || empty($id))

		header("location: $url/views/produk/");

	else{

		$query = "UPDATE `produk` SET `nama_produk` = '$nama', `warna` = '$warna', `jumlah` = '$jumlah', `harga` = '$harga', `id_merk` = '$merk', `id_kategori` = '$kategori' WHERE `produk`.`id_produk` = $id; ";

		$result = mysqli_query($conn, $query);

		($result) ?	header("location: $url/views/produk/") : print("$conn->error");
	}
