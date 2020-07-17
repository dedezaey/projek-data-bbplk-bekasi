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
							<a class="nav-link active" href="?p=FormLogin">Ryanaldi Store</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link active" href="?#">Contact Us</a>
						</li>

						<!-- <li class="nav-item ">
							<a class="nav-link active" href="?p=FormLogin">Login</a>
						</li>       -->
					</ul>
					<!-- <form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="search" name="q"> 
						<button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
					</form> -->
				</div>  
			</nav>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">

				<?php 
				require_once "koneksi.php";

				if (isset($_GET['p'])){
					$page = $_GET['p'];

					switch ($page) {
						case 'FormLogin':
						include "FormLogin.php";
						break;
						case 'berandaCstm':
						include "berandaCstm.php";
						break;
						case 'Facilities':
						include ".php";
						break;
						case 'GuestBook':
						include ".php";
						break;	
						case 'ContactUs':
						include ".php";
						break;			
						case 'Logout':
						include "logout.php";
						break;			
						default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
					}
				}else{
					include "FormLogin.php";
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
	<script src="asset/js1/gambar.js"></script>

</body>
</html>