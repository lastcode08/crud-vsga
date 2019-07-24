<?php  
	require_once '../../controller/koneksi.php';
	$query = "SELECT * FROM pelanggan;";
	$id = $_GET['id_pelanggan'];
	$result = mysqli_fetch_array(mysqli_query($conn, $query));
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
		<h1> <center>Ubah Pelanggan</center></h1>
		<hr /> <br />
		<!-- Form Add Merk Pelanggan -->
		<div class="card">
			<div class="card-body">
				<form action="../../controller/pelanggan/update.php" method="POST">
					<input type="hidden" name="id" value="<?= $id; ?>">
				  <div class="form-group">
				    <label for="nama-pelanggan">Nama Pelanggan</label>
				    <input type="text" class="form-control form-control-sm" name="nama-pelanggan" placeholder="Masukkan Nama Pelanggan" value="<?= $result['nama_pelanggan'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control form-control-sm" name="alamat" placeholder="Masukkan Alamat" value="<?= $result['alamat'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="warna-produk">Jenis Kelamin</label>
					  <select class="custom-select custom-select-sm" name="jenis-kelamin">
					    <option>-- Pilih Jenis Kelamin --</option>
					    <option value="L" <?= ($result['jenis_kelamin'] === 'L') ? 'selected' :''; ?>>Laki - Laki</option>
					    <option value="P" <?= ($result['jenis_kelamin'] === 'P') ? 'selected' :''; ?>>Perempuan</option>
					  </select>
				  </div>
				  <button type="submit" class="w-100 btn btn-sm btn-success">Simpan</button>
				</form>
			</div>
		</div>
		<!-- End Form Add Merk Produk -->
	</div>

	<script src="<?= $url; ?>/assets/js/jquery.min.js"></script>
	<script src="<?= $url; ?>/assets/js/popper.min.js"></script>
	<script src="<?= $url; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
