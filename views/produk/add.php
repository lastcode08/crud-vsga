<?php
	require_once '../../controller/koneksi.php';
	$categoriQuery = "SELECT * FROM kategori_produk;";
	$merkQuery = "SELECT * FROM merk;";
	$categories = mysqli_query($conn, $categoriQuery);
	$merk = mysqli_query($conn, $merkQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Produk</title>
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
	      <li class="nav-item dropdown active">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Master Data
	           <span class="sr-only">(current)</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?= $url; ?>/views/merk_produk/">Merk Produk</a>
	          <a class="dropdown-item" href="<?= $url; ?>/views/kategori_produk/">Kategori Produk</a>
	          <a class="dropdown-item active" href="<?= $url; ?>/views/produk/">Produk</a>
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
		<h1> <center>Tambah Merk Produk</center></h1>
		<hr /> <br />
		<!-- Form Add Merk Produk -->
		<div class="card">
			<div class="card-body">
				<form action="../../controller/produk/insert.php" method="POST">
				  <div class="form-group">
				    <label for="nama-produk">Nama Produk</label>
				    <input type="text" class="form-control form-control-sm" name="nama-produk" placeholder="Masukkan Nama Produk">
				  </div>
				  <div class="form-group">
				    <label for="nama-kategori">Nama Kategori</label>
					  <select class="custom-select custom-select-sm" name="kategori-produk">
					    <option selected>-- Pilih Kategori --</option>
					  	<?php foreach ($categories as $categori) { ?>
						    <option value="<?= $categori['id_kategori']; ?>"><?= $categori['nama_kategori']; ?></option>
					  	<?php } ?>
					  </select>
				  </div>
				  <div class="form-group">
				    <label for="warna-produk">Warna Produk</label>
				    <input type="text" class="form-control form-control-sm" name="warna-produk" placeholder="Masukkan Warna Produk">
				  </div>
				  <div class="form-group">
				    <label for="nama-merk">Nama Merk</label>				  	
					  <select class="custom-select custom-select-sm" name="merk-produk">
					    <option selected>-- Pilih Merk --</option>
					  	<?php foreach ($merk as $v) { ?>
						    <option value="<?= $v['id_merk']; ?>"><?= $v['nama_merk']; ?></option>
					  	<?php } ?>
					  </select>
				  </div>
				  <div class="form-group">
				    <label for="jumlah-produk">Jumlah Produk</label>
				    <input type="text" class="form-control form-control-sm" name="jumlah-produk" placeholder="Masukkan Jumlah Produk">
				  </div>
				  <div class="form-group">
				    <label for="harga-produk">Harga Produk</label>
				    <input type="text" class="form-control form-control-sm" name="harga-produk" placeholder="Masukkan Harga Produk">
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
