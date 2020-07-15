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


			<nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
				<a class="navbar-brand" href="#">Navigation</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="mencoba.html">Facilities</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link active" href="#">Guest Book</a>
						</li>    
					</ul>
					<form class="form-inline my-2 my-lg-0  " action="" method="GET" >
						<input class="form-control mr-sm-2" type="text" name="q" placeholder="search"> 
						<button class="btn btn-success my-2 my-sm-0" type="submit" name="q" style="width: 100px; ">search</button>
					</form>
				</div>  
			</nav>



			<!-- conten -->


			<div class="col-12 col-md-8 col-lg-10 " style="min-height:1350px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">
				<div class="container">
					<div class="row justify-content-center mt-5">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">periksa</span></h5></div>
								<div class="card-body">
									





									<h1>gagal login perikasa username dan kata sandi anda</h1>
									<a href="login.php" class="btn btn-primary">kembali</a>


								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>



		<!-- banner -->



		<div class="col-12 col-md-4 col-lg-2 bg-danger">


			<script>
      // Get the modal
      var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    	if (event.target == modal) {
    		modal.style.display = "none";
    	}
    }
</script>

<!-- see profil -->

<div class="card" style="width:250px;">
	<img class="card-img-top" src="../../aset/2.png" alt="Card image">
	<div class="card-img-overlay">
		<a href="#" class="btn btn-primary">See Profile</a>
		<button class="btn btn-primary" style="width: 120px;">
			<span class="spinner-border spinner-border-sm"></span>
			Loading..
		</button>
	</div>
</div>


<div class="card" style="width:250px">
	<img class="card-img-top" src="../../aset/1.png" alt="Card image">
	<div class="card-img-overlay">
		<a href="#" class="btn btn-primary">See Profile</a>
		<button data-toggle="collapse" data-target="#demo" class="btn btn-primary" style="width: 130px;">klik</button>

		<div id="demo" class="collapse">
			Lorem ipsum dolor text....
		</div>

	</div>
</div>


<div class="card" style="width:250px">
	<img class="card-img-top" src="../../aset/123.png" alt="Card image">
	<div class="card-img-overlay">
		<a href="#" class="btn btn-primary">See Profile</a>
	</div>
</div>


</div>



<div class="container-fluid" style="height: 500px;">

	<div class="row">
		<div class="col-sm-3" style="background-color: blue;height: 500px;">

			<div class="media border p-3 text-light">
				<img src="../../aset/1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
				<div class="media-body">
					<h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
					<p>Lorem ipsum...</p>
					<div class="media p-3">
						<img src="../../aset/2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
						<div class="media-body">
							<h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
							<p>Lorem ipsum...</p>
						</div>
					</div> 
				</div>
			</div>
		</div>

		<div class="col-sm-3" style="background-color: yellow;height: 500px;">
		</div>
		<div class="col-sm-3" style="background-color: green;height: 500px;"></div>
		<div class="col-sm-3" style="background-color: red;height: 500px;"></div>

	</div>
</div>



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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">



				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="modal-body">
					<form action="update.php" method="POST">
						<h5 class="modal-title" id="exampleModalLabel" align="center">up date data</h5>

						<label for="fname">nomer</label>
						<input type="text"  name="idUser" id="modal-id-user" placeholder="nomer anda" readonly="">


						<label for="fname">user name</label>
						<input type="text"  name="namaUser" id="modal-nama-user" placeholder="Nama lengkap . .">

						<label for="lname">E-mail</label>
						<input type="email"  name="emailUser" id="modal-email-user" placeholder="alamat email" style="width: 100%;">

						<input type="submit" value="update">

					</form>

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