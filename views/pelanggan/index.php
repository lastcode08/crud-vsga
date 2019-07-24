<?php  
	require_once '../../controller/koneksi.php';
	$query = "SELECT * FROM pelanggan;";
	$results =  mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Produk</title>
	<link rel="stylesheet" href="<?= $url; ?>/assets/css/bootstrap.min.css" />
</head>
<body>
	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?= $url; ?>">Latihan Mekanisme Web</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?= $url; ?>">Beranda</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= $url; ?>/controller/koneksi.php">Cek Koneksi</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Daftar Data</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Master Data
	           <span class="sr-only">(current)</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?= $url; ?>/views/merk_produk/">Merk Produk</a>
	          <a class="dropdown-item" href="<?= $url; ?>/views/kategori_produk/">Kategori Produk</a>
	          <a class="dropdown-item" href="<?= $url; ?>/views/produk/">Produk</a>
	        </div>
	      </li>
	    </ul>
	    <div class="my-2 my-lg-0">
	    	<button class="btn btn-sm btn-outline-secondary">Login</button>
	    </div>
	  </div>
	</nav>
	<!-- End Nav -->
	<div class="container pt-5">
		<h1> <center>Daftar Pelanggan</center></h1>
		<hr /> <br />
		<a class="btn btn-sm btn-primary" href="add.php">Tambah Data</a>
		<table class="table table-sm table-hover mt-2">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pelanggan</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if($results->num_rows === 0 ){ ?>
						<tr>
							<td colspan="3">
								<h5 class="text-center">Data Kosong!</h5>
							</td>
						</tr>
					<?php 
						exit();
					}else {
						foreach ($results as $i => $result) { ?>
							<tr>
								<td><?= ++$i; ?></td>
								<td><?= $result['nama_pelanggan'];?></td>
								<td><?= $result['alamat'];?></td>
								<td><?= ($result['jenis_kelamin'] === 'L') ? 'Laki - Laki' : 'Perempuan'; ?></td>
								<td>
									<a class="btn btn-sm btn-warning" href="edit.php?id_pelanggan=<?= $result['id_pelanggan']; ?>">Ubah</a>
									<a class="btn btn-sm btn-danger" href="<?= $url; ?>/controller/pelanggan/delete.php?id_pelanggan=<?= $result['id_pelanggan']; ?>">Hapus</a>
								</td>
							</tr>
					<?php	}
					} ?>
			</tbody>
		</table>
	</div>
	<script src="<?= $url; ?>/assets/js/jquery.min.js"></script>
	<script src="<?= $url; ?>/assets/js/popper.min.js"></script>
	<script src="<?= $url; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
