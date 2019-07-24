<?php 
	require_once '../koneksi.php';
	$id = $_GET['id_produk'];
	if(!empty($id)){
		$query = "DELETE FROM produk WHERE id_produk='$id'";
		mysqli_query($conn, $query);
	}
	header("location: $url/views/produk/");
