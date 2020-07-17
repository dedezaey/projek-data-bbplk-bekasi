<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Input Data Barang</title>
	<link rel="stylesheet" href="asset/css1/bootstrap.min.css">
	<link rel="icon" type="text/css" href="asset/images/gbr5.jpg">
</head>
<body>
	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 text-light" style="background-color: #33ccff;">
				<img src="asset/images/gbr3.jpg" alt="" style="width: 100%; height: 600px">
			</div>

			<nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top" style="background-color: #33ccff; padding-left: 15px; margin-right: 10px;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="?p=beranda">Home</a>
						</li>
						<ul class="navbar-nav">
							<li class="nav dropdown">
								<a class="nav-link active dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">Master</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="?p=FormInputUser">Data User</a>
									<a class="dropdown-item" href="?p=FormInputBarang">Data Barang</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav dropdown">
								<a class="nav-link active dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">Transaksi</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="?p=FromTableTransaksi">Table Transaksi</a>
									<a class="dropdown-item" href="?p=DataTransaksi">Data Transaksi</a>
								</div>
							</li>
						</ul>

						<!-- <li class="nav-item">
							<a class="nav-link active" href="?p=FormInputUser">Data User</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link active" href="?p=FormInputBarang">Data Barang</a>
						</li> -->
						<!-- <li class="nav-item ">
							<a class="nav-link active" href="?p=FormPenjualanBarang">Data Penjualan</a>
						</li>         -->
						<!-- <li class="nav-item ">
							<a class="nav-link active" href="?p=FromTableTransaksi">Data Transaksi</a>
						</li> -->
						<li class="nav-item ">
							<a class="nav-link active" href="?p=Logout">Logout</a>
						</li>                
					</ul>
					<span class="text-light ml-auto" style="padding-right: 10px;">
						<div id="clock" class="text-dark" style="font-weight:bold"></div>
					</span>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="search" name="q"> 
						<button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
					</form>
				</div>  
			</nav>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">

				<?php 
				require_once "koneksi.php";

				if (isset($_GET['p'])){
					$page = $_GET['p'];

					switch ($page) {
						case 'beranda':
						include "beranda.php";
						break;
						case 'FormInputUser':
						include "FormInputUser.php";
						break;
						case 'FormInputBarang':
						include "FormInputBarang.php";
						break;	
						case 'FormPenjualanBarang':
						include "formpenjualanbarang.php";
						break;	
						case 'FromTableTransaksi':
						include "FromTableTransaksi.php";
						break;
						case 'DataTransaksi':
						include "DataTransaksi.php";
						break;
						case 'Logout':
						include "logout.php";
						break;					
						default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
					}
				}else{
					include "beranda.php";
				}

				?>

			</div>

			<!-- <div class="col-12 col-md-4 col-lg-2 text-light pt-4" align="justify" style="background-color: #00ace6;">

				<img src="asset/images/avatar2.png" alt="Avatar" class="avatar" width="150" height="150px">

			</div> -->
			<div class="col-12 text-light" align="center" style="background-color: #33ccff;">Copyright @Ryanaldi 2020</div>
		</div>
	</div>
	<script src="asset/js1/jquery-3.5.1.js"></script>
	<script src="asset/js1/popper.min.js"></script>
	<script src="asset/js1/bootstrap.min.js"></script>
	<script src="asset/js1/myScript.js"></script>
	<script src="asset/js1/gambar.js"></script>

</body>
</html>