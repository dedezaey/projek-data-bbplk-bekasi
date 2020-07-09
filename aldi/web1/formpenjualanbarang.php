<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penjualan barang</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 text-light" style="background-color: #33ccff;">
				<img src="asset/images/gbr3.jpg" alt="" style="width: 100%; height: 600px">
			</div>

			<nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top" style="background-color: #33ccff; padding-left: 15px; margin-right: 10px;">
				<a class="navbar-brand" href="#">Ryanaldi</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="LatihanBootstrap4.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Facilities</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link active" href="#">Guest Book</a>
						</li>    
						<li class="nav-item ">
							<a class="nav-link active" href="Table.html">Daftar Komentar</a>
						</li>  
					</ul>
					<form class="form-inline my-2 my-lg-0 ">
						<input class="form-control mr-sm-2" type="text" placeholder="search"> 
						<button class="btn btn-success my-2 my-sm-0" type="button">search</button>
					</form>
				</div>  
			</nav>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">
				<h2 align="center" style="margin-top: 50px;">Form penjualan barang</h2>
				<form action="proses1.php" method="post" style="padding-right: 100px; padding-left: 100px;">
					<select class="form-control" name="nama_barang" id="nama_barang" style="margin-top: 30px;">
						<option value="">Nama Barang</option>
						<option value="Transistor">Transistor</option>
						<option value="Dioda">Dioda</option>
						<option value="Resistor">Resistor</option>
						<option value="Capasitor">Capasitor</option>
						<option value="IC 555">IC 555</option>
					</select>
					<!-- <div class="form-group" style="margin-top: 30px;">
						<label for="email">Nama Barang</label>
						<input type="email" class="form-control" id="nama" placeholder="Enter name" name="nama" required="">
					</div> -->
					<!-- <select class="form-control" name="combo1" id="combo1">
						<option value="">Harga Barang</option>
						<option value="Harga Barang1">1000</option>
						<option value="Harga Barang2">4000</option>
						<option value="Harga Barang3">500</option>
						<option value="Harga Barang4">3000</option>
						<option value="Harga Barang5">10000</option>
					</select> -->
					<div class="form-group">
						<label for="hargabarang"></label>
						<input type="number" class="form-control" id="hargabarang" placeholder="Harga Barang" name="harga_barang">
					</div>
					<div class="form-group">
						<label for="jumlahbarang"></label>
						<input type="number" class="form-control" id="jumlah barang" placeholder="jumlah Barang" name="jumlah_barang">
					</div>
					<button type="submit" class="btn btn-primary btn-lg" name="hitung">Hitung</button>
				</form>
			</div>

			<div class="col-12 col-md-4 col-lg-2 bg-danger text-light pt-4" align="justify" style="margin-top: 20px;">

				<form class="box" action="proseslogin.php" method="post">

					<h2 align="center">Login Here</h2>
					<br>

					<input type="text" name="ryanaldirivans" placeholder="Username" class="btn-lg btn-block">
					<br>

					<input type="password" name="password1" placeholder="Password" class="btn-lg btn-block">
					<br>

					<input type="submit" name="login" value="Login" class="btn-lg">

				</form>

			</div>
			<div class="col-12 bg-info text-light" align="center">Copyright @Ryanaldi 2020</div>
		</div>
	</div>

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>