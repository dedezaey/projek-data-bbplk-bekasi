<h2 align="center" style="margin-top: 50px;">Form Input Data Barang</h2>
<form action="prosesInsertBarang.php" method="post" style="padding-right: 100px; padding-left: 100px;">
	<div class="form-group">
		<label for="namaBarang"></label>
		<input type="text" class="form-control" placeholder="Masukan Nama Barang" name="namaBarang">
	</div>
	<div class="form-group">
		<label for="satuanBarang"></label>
		<input type="text" class="form-control" placeholder="Masukan Satuan Barang" name="satuanBarang" required>
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
						<input type="text" class="form-control" placeholder="Masukan Satuan Barang" name="satuanBarang" id="modal-satuan-barang" required>
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


<!-- <script>
	
	function showUpdateForm(id,nama,satuan,harga){
		//adalah  cara pada js DOM untuk
		document.getElementById('modal-id-barang').value = id ;
		document.getElementById('modal-nama-barang').value = nama ;
		document.getElementById('modal-satuan-barang').value = satuan ;
		document.getElementById('modal-harga-barang').value = harga ;
	}
</script> -->