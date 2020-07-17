<?php 
if(isset($_POST['hitung'])){

	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	
	$total_harga = $harga_barang*$jumlah_barang;
	if($jumlah_barang>=10){
		$diskon = 0.05*$total_harga;
	}else{
		$diskon =0;
	}
	$grand_total = $total_harga - $diskon;
	
}else{
	$nama_barang = "";
	$harga_barang = "";
	$jumlah_barang = "";
	$total_harga = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>proses</title>
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
				<form action="proses2.php" method="post" style="padding-right: 100px; padding-left: 100px;">
					
					<div class="form-group">
						<label for="nama">Nama Barang</label>
						<input type="nama" class="form-control" name="nama_barang" value="<?php echo $nama_barang;?>" readonly>
					</div>
					<div class="form-group">
						<label for="harga">Harga Barang</label>
						<input type="number" class="form-control"  name="harga_barang" value="<?php echo $harga_barang;?>" readonly>
					</div>
					<div class="form-group">
						<label for="jumlah">Jumlah Barang</label>
						<input type="number" class="form-control"  name="jumlah_barang" value="<?php echo $jumlah_barang;?>" readonly>
					</div>
					<div class="form-group">
						<label for="total">Total Harga</label>
						<input type="number" class="form-control"  name="total_harga" id="total_harga" value="<?php echo $total_harga;?>" readonly>
					</div>
					<div class="form-group">
						<label for="total">Diskon</label>
						<input type="number" class="form-control"  name="diskon" id="diskon" value="<?php echo $diskon;?>" readonly>
					</div>
					<div class="form-group">
						<label for="total">Grand Total</label>
						<input type="number" class="form-control"  name="grand_total" id="grand_total" value="<?php echo $grand_total;?>" readonly>
					</div>
					<div class="form-group">
						<label for="nama">Jumlah Bayar</label>
						<input type="number" class="form-control"  name="jumlah_bayar" onchange="getKembali()" onkeyup="getKembali()" id="jumlah_bayar">
					</div>
					<div class="form-group">
						<label for="nama">Uang Kembali</label>
						<input type="number" class="form-control"  name="kembali" id="kembali" readonly>
					</div>
					<!-- <select class="form-control" name="combo1" id="combo1">
						<option value="">Harga Barang</option>
						<option value="Harga Barang1">1000</option>
						<option value="Harga Barang2">4000</option>
						<option value="Harga Barang3">500</option>
						<option value="Harga Barang4">3000</option>
						<option value="Harga Barang5">10000</option>
					</select> -->
					<!-- <div class="form-group">
						<label for="hargabarang"></label>
						<input type="number" class="form-control" id="hargabarang" placeholder="Harga Barang" name="harga_barang" required="">
					</div>
					<div class="form-group">
						<label for="jumlahbarang"></label>
						<input type="number" class="form-control" id="jumlah barang" placeholder="jumlah Barang" name="jumlah_barang" required="">
					</div> -->
					<button type="submit" class="btn btn-primary btn-lg">Bayar</button>
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
	
	<script>
		function getKembali(){
			var total_harga = document.getElementById('total_harga').value
			var jumlah_bayar = document.getElementById('jumlah_bayar').value

			var kembali = jumlah_bayar - total_harga
			document.getElementById('kembali').value = kembali
			if(kembali < 0){
				document.getElementById('tombolbayar').disabled=true;
			}else{
				document.getElementById('tombolbayar').disabled=false;
			}
			console.log(kembali)

		}
	</script>

</body>
</html>
