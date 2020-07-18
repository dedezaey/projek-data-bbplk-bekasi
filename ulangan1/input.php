<?php 
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
	</style>
</head>
<body>
	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 text-light" style="background-color: #33ccff;">
			</div>
			
			<nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top" style="background-color: blue; padding-left: 15px; margin-right: 10px;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="index.php">log out</a>
						</li>
						
					</ul>

				</div>  
			</nav>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">
				<h2 align="center" style="margin-top: 50px;">form input barang</h2>




				<form action="prosesInsertBarang.php" method="post" style="padding-right: 100px; padding-left: 100px;" class="mt-5">
					

					<label for="namaBarang">nama barang</label>
					<input type="text" class="form-control" placeholder="Masukan Nama Barang" name="namaBarang">

					<label for="satuanBarang">satuan</label>
					<input type="number" class="form-control" placeholder="Masukan Satuan Barang" name="satuanBarang" required>

					<label for="hargaBarang">harga</label>
					<input type="number" class="form-control" placeholder="Masukan Harga Barang" name="hargaBarang" required>


					<button type="submit" class="btn btn-primary btn-lg mt-5 mb-5" name="kirim">Kirim</button>

					<button class="btn btn-warning" ><a href="formbarang.php">kembali</a></button>

				</form>

			</body>
			</html>