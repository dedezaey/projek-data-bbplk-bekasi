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
				<button style="float: right; " class="mt-5" ><a href="index.php">log out</a></button>
				<h2 align="center" style="margin-top: 50px;">Form  Data Barang</h2>


				<table class="mb-5">
					<tr>

						<form class="form-inline my-2 my-lg-0 mt-5 mb-5" >

							<th>cari data : <input class="form-control " type="text" placeholder="search" name="q">
								<button class="btn btn-success  " type="submit">search</button></th>
							</form>
						</tr>
					</table>

					<div class="mb-5" style="float: right">
						<button class="btn-warning"><a href="input.php">tambah</a></button>
						
					</div>

					<!-- Tabel data -->
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th>no</th>
								<th>kode barang</th>
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
										<td><?=$row['kode_barang']?></td>

										<td><?=$row['nama_barang']?></td>
										<td><?=$row['satuan_barang']?></td>
										<td><?=$row['harga_barang']?></td>
										<td>
											<a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="prosesDeleteBarang.php?id=<?=$row['id_barang']?>">hapus
											</a>
											<a class="btn btn-primary" href="prosesUpdateBarang.php" onclick=
											"showUpdateForm('<?=$row['id_barang']?>','<?=$row['kode_barang']?>' , '<?=$row['nama_barang']?>','<?=$row['satuan_barang']?>','<?=$row['harga_barang']?>')"data-toggle="modal" data-target="#exampleModal">edit</a>
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

			</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Form edit Data Barang</h5>
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
									<label for="idBarang">kode barang :</label>
									<input type="text" class="form-control" name="kodeBarang" id="modal-kode-barang" readonly>
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
	function showUpdateForm(id,kode,nama,satuan,harga){
		//adalah  cara pada js DOM untuk
		document.getElementById('modal-id-barang').value = id ;
		document.getElementById('modal-kode-barang').value = kode ;

		document.getElementById('modal-nama-barang').value = nama ;
		document.getElementById('modal-satuan-barang').value = satuan ;
		document.getElementById('modal-harga-barang').value = harga ;
	}
</script>
</body>
</html>