<h2 align="center" style="margin-top: 50px;">Form Input Data User</h2>
<form action="prosesinsert.php" method="post" style="padding-right: 100px; padding-left: 100px;">
	<div class="form-group">
		<label for="namaUser"></label>
		<input type="text" class="form-control" placeholder="Masukan Nama" name="namaUser">
	</div>
	<div class="form-group">
		<label for="emailUser"></label>
		<input type="email" class="form-control" placeholder="Masukan Email" name="emailUser" required>
	</div>
	<div class="form-group">
		<label for="passwordUser"></label>
		<input type="password" class="form-control" placeholder="Masukan Password" name="passwordUser" required>
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
			<th>Email</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
		<?php 
						//Jika $_GET['q'] ada isinya
		if(isset($_GET['q'])){
							//yang dijalankan jika ada isinya
			$q = $_GET['q'];
			$sql = "SELECT*FROM tb_users WHERE nama_user LIKE '%$q%'";
		}else{
							//Jika $_GET['q'] tidak ada isinya
			$sql = "SELECT*FROM tb_users";
		}

		$result = $conn->query($sql);

		if($result->num_rows > 0){
								//Akan dijalanan jika recordnya ada
			while ($row = $result->fetch_assoc()){ ?>
				<tr>
					<td><?=$row['id_user']?></td>
					<td><?=$row['nama_user']?></td>
					<td><?=$row['email_user']?></td>
					<td>
						<a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger, fas fa-trash" href="prosesDeleteUser.php?id=<?=$row['id_user']?>">
						</a>
						<a class="btn btn-primary, fas fa-pen" href="" onclick=
						"showUpdateForm('<?=$row['id_user']?>','<?=$row['nama_user']?>','<?=$row['email_user']?>')"data-toggle="modal" data-target="#exampleModal"></a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="prosesUpdateUser.php" method="get" style="padding-right: 100px; padding-left: 100px;">
					<div class="form-group">
						<label for="namaUser">ID User :</label>
						<input type="text" class="form-control" name="idUser" id="modal-id-user" readonly>
					</div>
					<div class="form-group">
						<label for="namaUser">Nama User :</label>
						<input type="text" class="form-control" placeholder="Masukan Nama" name="namaUser" id="modal-nama-user">
					</div>
					<div class="form-group">
						<label for="emailUser">Email User :</label>
						<input type="email" class="form-control" placeholder="Masukan Email" name="emailUser" id="modal-email-user" required>
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
	
	function showUpdateForm(id,nama,email){
		
		document.getElementById('modal-id-user').value = id ;
		document.getElementById('modal-nama-user').value = nama ;
		document.getElementById('modal-email-user').value = email ;
	}
</script> -->