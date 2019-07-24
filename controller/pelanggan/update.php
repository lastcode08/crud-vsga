<?php 
	require_once '../koneksi.php';

	$nama = htmlspecialchars($_POST['nama-pelanggan']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$jenisKelamin = htmlspecialchars($_POST['jenis-kelamin']);
	$id = htmlspecialchars($_POST['id']);

	if(empty($nama) || empty($alamat) || empty($jenisKelamin) || empty($id))

		header("location: $url/views/pelanggan/");

	else{

		$query = "UPDATE `pelanggan` SET `nama_pelanggan` = '$nama', `alamat` = '$alamat', `jenis_kelamin` = '$jenisKelamin' WHERE `pelanggan`.`id_pelanggan` = $id;";

		$result = mysqli_query($conn, $query);

		($result) ?	header("location: $url/views/pelanggan/") : print("$conn->error");
	}
