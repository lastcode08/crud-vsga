<?php require_once '../../controller/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nama Toko</title>
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
	        <a class="nav-link" href="<?= $url; ?>/views/pelanggan">Daftar Pelanggan</a>
	      </li>
	      <li class="nav-item dropdown`">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Master Data
	           <span class="sr-only">(current)</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?= $url; ?>/views/merk_produk/">Merk Produk</a>
	          <a class="dropdown-item`" href="<?= $url; ?>/views/kategori_produk/">Kategori Produk</a>
	          <a class="dropdown-item" href="<?= $url; ?>/views/produk/">Produk</a>
	        </div>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<!-- End Nav -->

