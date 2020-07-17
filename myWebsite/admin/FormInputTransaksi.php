<h2 align="center" style="margin-top: 50px;">Form Input Transaksi</h2>
<div class="container">
	<form class="form-inline" action="">
		<input type="text" class="form-control text-center w-25 " id="" name="" placeholder="No transaksi">
		<input type="date" class="form-control ml-auto text-center w-25" id="date" name="date" placeholder="">
	</form>
	<form action="" class="form-inline">
		<input type="text" class="form-control text-center ml-auto mt-3 w-25" id="" name="" placeholder="nama user">
	</form>
	<form action="" class="form-inline mt-3">
		<select onchange="getDataBarang()" name="cars" class="custom-select" id="id_barang">
			<option selected>Pilih Barang--></option>
			<?php
			require_once 'koneksi.php';
			$sql = "SELECT*FROM tb_barang";
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()) { ?>
				<option value="<?=$row['id_barang'];?>"><?=$row['id_barang'] ."-". $row['nama_barang']; ?></option> ?>
			<?php }; ?>
			
		</select>
		<input type="text" class="form-control text-center mx-auto w-25" id="" name="" placeholder="harga">
		<input type="text" class="form-control text-center mx-auto w-25" id="" name="" placeholder="jumlah">
		<input type="text" class="form-control text-center mx-auto w-25" id="" name="" placeholder="jumlah">
		<button type="submit" class="form-control text-center mx-auto w-15" id="" name="" placeholder="jumlah"></button>
	</form>

	<!-- <form action="" class="form-inline mt-3">
		
		<input type="text" class="form-control mx-auto text-center w-25" id="" name="" placeholder="harga">
		<input type="text" class="form-control mx-auto text-center w-25" id="" name="Jumlah" placeholder="">
		<input type="text" class="form-control ml-auto text-center w-25" id="" name="" placeholder="">
	</form> -->
</div>

<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama Barang</th>
			<th>Satuan Harga</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
		<?php 
						//Jika $_GET['q'] ada isinya
		if(isset($_GET['q'])){
							//yang dijalankan jika ada isinya
			$q = $_GET['q'];
			$sql = "SELECT*FROM WHERE LIKE '%$q%'";
		}else{
							//Jika $_GET['q'] tidak ada isinya
			$sql = "SELECT*FROM ";
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