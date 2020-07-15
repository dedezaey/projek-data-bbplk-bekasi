<?php 
require_once "koneksi.php"

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>

	<style>
	</style>

	<title></title>

</head>
<body>

	<?php 
//jika $_GET['q']ada isinya
	if (isset($_GET['q'])) {
  //yang dijalankan isinya 
		$q = $_GET['q'];
		$sql = "SELECT*FROM tb_user WHERE nama_user LIKE '%$q%' ";
	}else{
		$sql = "SELECT*FROM tb_user";
	}
	$result = $conn->query($sql);



	?>


	<!-- header -->

	<div class= "countainer-fluid">
		<div class="row">
			<div class= "col-12 bg-primary text-light" style="height: 100px; background-image: url(../../aset/tembok.jpg);" ></div>



			<!-- menu -->


			<nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top text-light" >
				<a><marquee>zae,zae,<marquee>zae,zae,</marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee></marquee><marquee>zae,zae,</marquee><marquee>zae,zae,</marquee></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				
			</div>  
		</nav>



		<!-- conten -->


		<div class="col-12" style="min-height:1350px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">
			<div class="row justify-content-center mt-5">
				<div class="card">
					<div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
					<div class="card-body">


						<h3>Halaman Login </h3>
						<form action="datalogin.php" method="post" onSubmit="return validasi()">		
							<table >
								<tr>
									<td>Email User</td>
									<td><input type="text" name="emailUser" id="emailUser"></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name="passwordUser" id="passwordUser"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="login"></td>
								</tr>
							</table>
						</form>









					</div>
				</div>
			</div>


		</div>
	</div>



	<!-- banner -->




	<!-- footer -->


	<div class="col-12 bg-info text-light">
		<marquee> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</marquee>

	</div>
</div>
</div>


</div>
</div>

<script>
  //fungsi untuk memasukan nilai pada form uptudate
  function showUpdateForm(id,nama,email,password){
  	document.getElementById('modal-id-user').value = id;
  	document.getElementById('modal-nama-user').value = nama;
  	document.getElementById('modal-email-user').value = email;
  }

</script>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>