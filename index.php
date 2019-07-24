<?php require_once 'controller/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Toko Salome</title>
	<link rel="stylesheet" href="<?= $url; ?>/assets/css/bootstrap.min.css" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?= $url; ?>">Latihan Mekanisme Web</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= $url; ?>">Beranda <span class="sr-only">(current)</span></a>
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
	<!-- Start Contect -->
	<div class="container-fluid pt-5">
		<div class="card border-bottom-0 border-top-0">
			<div class="card-body bg-light">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3 mb-5 px-5">
						<div class="card shadow">
						  <div class="card-img-top w-100 bg-dark text-white text-center p-5">Image Produk</div>
						  <div class="card-body text-center">
						  	<div class="lead mb-2">Samsung s6</div>
						  	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illum, aut. Fugit alias, blanditiis.</p>
						  	<p class="text-muted d-block text-underline"><u>Rp. 3.000.000</u></p>
						  	<div class="row">
						  		<div class="col">
						  			<button class="btn btn-sm btn-primary w-100">Lihat Detail</button>
						  		</div>
						  		<div class="col">
						  			<button class="btn btn-sm btn-success w-100">Beli</button>
						  		</div>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-5 px-5">
						<div class="card shadow">
						  <div class="card-img-top w-100 bg-dark text-white text-center p-5">Image Produk</div>
						  <div class="card-body text-center">
						  	<div class="lead mb-2">Samsung s6</div>
						  	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illum, aut. Fugit alias, blanditiis.</p>
						  	<p class="text-muted d-block text-underline"><u>Rp. 3.000.000</u></p>
						  	<div class="row">
						  		<div class="col">
						  			<button class="btn btn-sm btn-primary w-100">Lihat Detail</button>
						  		</div>
						  		<div class="col">
						  			<button class="btn btn-sm btn-success w-100">Beli</button>
						  		</div>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-5 px-5">
						<div class="card shadow">
						  <div class="card-img-top w-100 bg-dark text-white text-center p-5">Image Produk</div>
						  <div class="card-body text-center">
						  	<div class="lead mb-2">Samsung s6</div>
						  	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illum, aut. Fugit alias, blanditiis.</p>
						  	<p class="text-muted d-block text-underline"><u>Rp. 3.000.000</u></p>
						  	<div class="row">
						  		<div class="col">
						  			<button class="btn btn-sm btn-primary w-100">Lihat Detail</button>
						  		</div>
						  		<div class="col">
						  			<button class="btn btn-sm btn-success w-100">Beli</button>
						  		</div>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-5 px-5">
						<div class="card shadow">
						  <div class="card-img-top w-100 bg-dark text-white text-center p-5">Image Produk</div>
						  <div class="card-body text-center">
						  	<div class="lead mb-2">Samsung s6</div>
						  	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illum, aut. Fugit alias, blanditiis.</p>
						  	<p class="text-muted d-block text-underline"><u>Rp. 3.000.000</u></p>
						  	<div class="row">
						  		<div class="col">
						  			<button class="btn btn-sm btn-primary w-100">Lihat Detail</button>
						  		</div>
						  		<div class="col">
						  			<button class="btn btn-sm btn-success w-100">Beli</button>
						  		</div>
						  	</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->
	<script src="<?= $url; ?>/assets/js/jquery.min.js"></script>
	<script src="<?= $url; ?>/assets/js/popper.min.js"></script>
	<script src="<?= $url; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
