<?php 
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Input Data Barangr</title>
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
				<img src="asset/images/foto_red.jpg" alt="" style="width: 46px; height: 46px; border-radius: 40%;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="LatihanBootstrap4.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">Data Barang</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link active" href="#">Guest Book</a>
						</li>    
						<!-- <li class="nav-item ">
							<a class="nav-link active" href="Table.html">Daftar Komentar</a>
						</li>   -->
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="search" name="q"> 
						<button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
					</form>
				</div>  
			</nav>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">
				<h2 align="center" style="margin-top: 50px;">Form Input Data Barang</h2>
				<form action="prosesInsertBarang.php" method="post" style="padding-right: 100px; padding-left: 100px;">
					<div class="form-group">
						<label for="namaBarang"></label>
						<input type="text" class="form-control" placeholder="Masukan Nama Barang" name="namaBarang">
					</div>
					<div class="form-group">
						<label for="satuanBarang"></label>
						<input type="number" class="form-control" placeholder="Masukan Satuan Barang" name="satuanBarang" required>
					</div>
					<div class="form-group">
						<label for="hargaBarang"></label>
						<input type="number" class="form-control" placeholder="Masukan Harga Barang" name="hargaBarang" required>
					</div>
					<button type="submit" class="btn btn-primary btn-lg" name="kirim">Kirim</button>
				</form>
				<br>
				<!-- Tabel data -->
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Satuan</th>
							<th>Harga</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php 
						//Jika $_GET['q'] ada isinya
						if(isset($_GET['q'])){
							//yang dijalankan jika ada isinya
							$q = $_GET['q'];
							$sql = "SELECT*FROM tb_barang WHERE nama_barang LIKE '%$q%'";
						}else{
							//Jika $_GET['q'] tidak ada isinya
							$sql = "SELECT*FROM tb_barang";
						}
						
						$result = $conn->query($sql);

						if($result->num_rows > 0){
								//Akan dijalanan jika recordnya ada
							while ($row = $result->fetch_assoc()){ ?>
								<tr>
									<td><?=$row['id_barang']?></td>
									<td><?=$row['nama_barang']?></td>
									<td><?=$row['satuan_barang']?></td>
									<td><?=$row['harga_barang']?></td>
									<td>
										<a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger, fas fa-trash" href="prosesDeleteBarang.php?id=<?=$row['id_barang']?>">
										</a>
										<a class="btn btn-primary, fas fa-pen" href="" onclick=
										"showUpdateForm('<?=$row['id_barang']?>','<?=$row['nama_barang']?>','<?=$row['satuan_barang']?>','<?=$row['harga_barang']?>')"data-toggle="modal" data-target="#exampleModal"></a>
									</td>
									<!-- <i class="fas fa-pen"></i> -->
								</tr>

								<?php
							}
						}else{
								//Akan dijalankan jika recordnya kosong
							echo "<tr><td colspan='3'>Recordnya masih kosong</td></tr>";
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-12 col-md-4 col-lg-2 text-light pt-4" align="justify" style="background-color: #00ace6;">

				<img src="asset/images/avatar2.png" alt="Avatar" class="avatar" width="150" height="150px">

			</div>
			<div class="col-12 text-light" align="center" style="background-color: #33ccff;">Copyright @Ryanaldi 2020</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Update Data Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="prosesUpdateBarang.php" method="post" style="padding-right: 100px; padding-left: 100px;">
						<div class="form-group">
							<label for="idBarang">Id Barang :</label>
							<input type="text" class="form-control" name="idBarang" id="modal-id-barang" readonly>
						</div>
						<div class="form-group">
							<label for="namaBarang">Nama Barang :</label>
							<input type="text" class="form-control" placeholder="Masukan Nama" name="namaBarang" id="modal-nama-barang">
						</div>
						<div class="form-group">
							<label for="satuanBarang">Satuan Barang :</label>
							<input type="number" class="form-control" placeholder="Masukan Satuan Barang" name="satuanBarang" id="modal-satuan-barang" required>
						</div>
						<div class="form-group">
							<label for="HargaBarang">Harga Barang :</label>
							<input type="number" class="form-control" placeholder="Masukan Harga Barang" name="hargaBarang" id="modal-harga-barang" required>
						</div>
						
						<!-- <div class="form-group">
							<label for="passwordUser" class="control-label col-sm-3">Password User :</label>
							<input type="password" class="form-control" placeholder="Masukan Password" name="passwordUser" id="modal-password-user" required>
						</div> -->
						<button type="submit" class="btn btn-primary btn-lg" name="simpan" value="update">Kirim</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script src="asset/js1/jquery.min.js"></script>
<script src="asset/js1/popper.min.js"></script>
<script src="asset/js1/bootstrap.min.js"></script>
<script src="asset/js1/gambar.js"></script>

<script>
	//Fungsi untuk menampilkan nilai pada form update
	function showUpdateForm(id,nama,satuan,harga){
		//adalah  cara pada js DOM untuk
		document.getElementById('modal-id-barang').value = id ;
		document.getElementById('modal-nama-barang').value = nama ;
		document.getElementById('modal-satuan-barang').value = satuan ;
		document.getElementById('modal-harga-barang').value = harga ;
	}
</script>
</body>
</html>