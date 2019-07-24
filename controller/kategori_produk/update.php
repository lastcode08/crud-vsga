<?php 
	require_once '../koneksi.php';
	$nama = htmlspecialchars($_POST['nama-kategori']);
	$id = htmlspecialchars($_POST['id']);

	if(empty($nama) || empty($id))
		header("location: $url/views/kategori_produk/");
	else{
		$query = "UPDATE `kategori_produk` SET `nama_kategori` = '$nama' WHERE `id_kategori` = $id; ";
		$result = mysqli_query($conn, $query);
		($result) ?	header("location: $url/views/kategori_produk/") : print("$conn->error");
	}
