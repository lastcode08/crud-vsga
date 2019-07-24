<?php 
	require_once '../koneksi.php';
	$id = $_GET['id_kategori'];
	if(!empty($id)){
		$query = "DELETE FROM kategori_produk WHERE id_kategori='$id'";
		mysqli_query($conn, $query);
	}
	header("location: $url/views/kategori_produk/");
