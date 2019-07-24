<?php 
	require_once '../koneksi.php';
	$namaMerk = htmlspecialchars($_POST['nama-merk']);
	$id = htmlspecialchars($_POST['id']);

	if(empty($namaMerk) || empty($id))
		header("location: $url/views/merk_produk/");
	else{
		$query = "UPDATE `merk` SET `nama_merk` = '$namaMerk' WHERE `id_merk` = $id; ";
		$result = mysqli_query($conn, $query);
		($result) ?	header("location: $url/views/merk_produk/") : print("$conn->error");
	}
