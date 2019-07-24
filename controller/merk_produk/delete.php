<?php 
	require_once '../koneksi.php';
	$id = $_GET['id_merk'];
	if(!empty($id)){
		$query = "DELETE FROM merk WHERE id_merk='$id'";
		mysqli_query($conn, $query);
	}
	header("location: $url/views/merk_produk/");
