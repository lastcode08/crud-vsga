<?php 
	require_once '../koneksi.php';

	$nama = htmlspecialchars($_POST['nama-produk']);
	$kategori = htmlspecialchars($_POST['kategori-produk']);
	$warna = htmlspecialchars($_POST['warna-produk']);
	$merk = htmlspecialchars($_POST['merk-produk']);
	$jumlah = htmlspecialchars($_POST['jumlah-produk']);
	$harga = htmlspecialchars($_POST['harga-produk']);

	if(empty($nama) || empty($kategori) || empty($warna) || empty($merk) || empty($jumlah) || empty($harga))
		header("location: $url/views/produk/");
	else{
		$query = "INSERT INTO `produk` (`nama_produk`, `warna`, `jumlah`, `harga`, `id_merk`, `id_kategori`) VALUES ('$nama', '$warna', '$jumlah', '$harga', '$merk', '$kategori');";
		$insert = mysqli_query($conn, $query);
		($insert) ?	header("location: $url/views/produk/") : print("$conn->error");
	}
