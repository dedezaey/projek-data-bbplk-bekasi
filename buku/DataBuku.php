<?php 
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Input Data Buku</title>
	<link rel="stylesheet" href="asset/css1/bootstrap.min.css">
	<link rel="icon" type="text/css" href="asset/images/gbr5.jpg">
</head>
<body>
	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 text-light" style="background-color: #33ccff;">

			</div>

			<div class=" col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">
				<h2 align="center" style="margin-top: 50px;">Form Daftar Buku</h2>
				<form action="prosesInsertBuku.php" method="post" style="padding-right: 100px; padding-left: 100px;">
					<div class="form-group">
						<label for="namaBuku">Nama Buku :</label>
						<input type="text" class="form-control" placeholder="Masukan Nama Buku" name="namaBuku">
					</div>
					<div class="form-group">
						<label for="namaPenerbit">Nama Penerbit :</label>
						<input type="teks" class="form-control" placeholder="Masukan Nama Penerbit" name="namaPenerbit" required>
					</div>
					<div class="form-group">
						<label for="namaPenulis">Nama Penulis :</label>
						<input type="teks" class="form-control" placeholder="Masukan Nama Penulis" name="namaPenulis" required>
					</div>
					<!-- <div class="form-group">
						<label for="tahunTerbit">Tahun Terbit Buku :</label>
						<input type="number" class="form-control" placeholder="Masukan Tahun Terbit Buku" name="tahunTerbit" required>
					</div> -->
					<div class="form-group">
						<label for="tahunTerbit" name="tahunTerbit">Tahun Terbit Buku :</label>
						<select type="number" class="custom-select" placeholder="Masukan Tahun Terbit Buku" name="tahunTerbit">
							<option selected>Tahun Terbit</option>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-lg" name="kirim">Kirim</button>
				</form>
				<hr>
				<!-- Tabel data -->
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="search" name="q"> 
					<button class="btn btn-success my-2 my-sm-0" type="submit3">search</button>
				</form>
				<br>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>Id Buku</th>
							<th>Nama</th>
							<th>Penerbit</th>
							<th>Penulis</th>
							<th>Tahun Terbit</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php 
						//Jika $_GET['q'] ada isinya
						if(isset($_GET['q'])){
							//yang dijalankan jika ada isinya
							$q = $_GET['q'];
							$sql = "SELECT*FROM tb_buku WHERE nama_buku LIKE '%$q%'";
						}else{
							//Jika $_GET['q'] tidak ada isinya
							$sql = "SELECT*FROM tb_buku";
						}

						$result = $conn->query($sql);

						if($result->num_rows > 0){
								//Akan dijalanan jika recordnya ada
							while ($row = $result->fetch_assoc()){ ?>
								<tr>
									<td><?=$row['id_buku']?></td>
									<td><?=$row['nama_buku']?></td>
									<td><?=$row['nama_penerbit']?></td>
									<td><?=$row['nama_penulis']?></td>
									<td><?=$row['tahun_terbit']?></td>
									<td>
										<a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger, fas fa-trash" href="prosesDeleteBuku.php?id=<?=$row['id_buku']?>">
										</a>
										<a class="btn btn-primary, fas fa-pen" href="" onclick=
										"showUpdateForm('<?=$row['id_buku']?>','<?=$row['nama_buku']?>','<?=$row['nama_penerbit']?>','<?=$row['nama_penerbit']?>','<?=$row['tahun_terbit']?>')"data-toggle="modal" data-target="#exampleModal"></a>
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
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Update Data Buku</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="prosesUpdateBuku.php" method="post" style="padding-right: 100px; padding-left: 100px;">
						<div class="form-group">
							<label for="idBuku">Id Buku :</label>
							<input type="text" class="form-control" name="idBuku" id="modal-id-buku" readonly>
						</div>
						<div class="form-group">
							<label for="namaBuku">Nama Buku :</label>
							<input type="text" class="form-control" placeholder="Maukan Nama Buku" name="namaBuku" id="modal-nama-buku">
						</div>
						<div class="form-group">
							<label for="namaPenerbit">Nama Penerbit :</label>
							<input type="text" class="form-control" placeholder="Masukan Nama Penerbit" name="namaPenerbit" id="modal-nama-penerbit" required>
						</div>
						<div class="form-group">
							<label for="namaPenulis">Nama Penulis :</label>
							<input type="text" class="form-control" placeholder="Masukan Nama Penulis" name="namaPenulis" id="modal-nama-penulis" required>
						</div>
						<div class="form-group">
							<label for="tahunTerbit">Tahun Terbit :</label>
							<input type="number" class="form-control" placeholder="Masukan Tahun Terbit" name="tahunTerbit" id="modal-tahun-terbit" required>
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
	function showUpdateForm(id,nama,penerbit,penulis,tahun){
		//adalah  cara pada js DOM untuk
		document.getElementById('modal-id-buku').value = id ;
		document.getElementById('modal-nama-buku').value = nama ;
		document.getElementById('modal-nama-penerbit').value = penerbit ;
		document.getElementById('modal-nama-penulis').value = penulis ;
		document.getElementById('modal-tahun-terbit').value = tahun ;
	}
</script>
</body>
</html>