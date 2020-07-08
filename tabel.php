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


		/* Add a background color and some padding around the form */
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}


	</style>
	<title>KOMENTAR</title>
</head>
<body>

	<?php 
	$nama1 = "mr.bean";
	$email1 = "mr.bean@examole.com";
	$komentar1 = "lorem ipsum";
	$nama2 = "ultraman";
	$email2 = "ultraman@examole.com";
	$komentar2 = "lorem ipsum";
	$nama3 = "fizi";
	$email3 = "fizi@examole.com";
	$komentar3 = "lorem ipsum";
	?>

	<!-- header -->

	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 bg-primary text-light" style="height: 100px; background-image: url(aset/tembok.jpg);" >
				<h1 class="text-light" style="text-align: center;">upin&ipin </h1>

			</div>
			<!-- menu -->
			<nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
				<a class="navbar-brand" href="#">Navigation</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav" >
						<li class="nav-item ">
							<a class="nav-link active" href="#">Data komentar</a>
						</li>    
					</ul >
					<form class="form-inline my-2 my-lg-0 " >
						<input class="form-control mr-sm-2" type="text" placeholder="search"> 
						<button class="btn btn-success my-2 my-sm-0" type="button" style="width: 100px; ">search</button>
					</form>
				</div>  
			</nav>
			<!-- conten -->

			<div class="col-12 col-md-8 col-lg-10 " style="min-height:650px; margin-top: 10px; margin-bottom: 10px; background-image: url(aset/background.jpg);">
				<div class="container">
					<div class="container" >
						<h2 align="center">Data komentar</h2>
						<p align="center">inilah komentar para netizen!!</p>
						<table class="table table-dark table-hover">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Email</th>
									<th>komentar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $nama1; ?></td>
									<td><?php echo $email1; ?></td>
									<td><?php echo $komentar1; ?> </td>
								</tr>
								<tr>
									<td><?php echo $nama2; ?></td>
									<td><?php echo $email2; ?></td>
									<td><?php echo $komentar2; ?></td>
								</tr>
								<tr>
									<td><?php echo $nama3; ?></td>
									<td><?php echo $email3; ?></td>
									<td><?php echo $komentar3; ?></td>
								</tr>
								<tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- banner -->

				<div class="col-12 col-md-4 col-lg-2 bg-danger text-light" >
					<h4>inilah komentar terbaik</h4>

					<div class="media border p-3" style="">
						<img src="aset/ultraman.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
						<div class="media-body">
							<h4>ultraman <small><i>Posted on july 01, 2020</i></small></h4>
							<p>ngopi admin</p>
							<div class="media p-3">
								<img src="aset/123.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
								<div class="media-body">
									<h4>admin <small><i>Posted on july 02 2020</i></small></h4>
									<p>siap ultraman</p>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>

			<!-- komentar -->

			<!-- komentar 1 -->

			<div class="container-fluid" style="height: 500px;">

				<div class="row">
					<div class="col-sm-3" style="background-color: blue;height: 500px;">

						<div class="media border p-3 text-light">
							<img src="aset/uya.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
							<div class="media-body">
								<h4>uya kuya <small><i>Posted on February 19, 2016</i></small></h4>
								<p>selamat datag di rumah uya</p>

								<div class="media p-3">
									<img src="aset/ultraman.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
									<div class="media-body">
										<h4>ultraman <small><i>Posted on February 20 2016</i></small></h4>
										<p>salah tempat woyyy!</p>
									</div>
								</div>

								<div class="media p-3">
									<img src="aset/mr.bean.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
									<div class="media-body">
										<h4>mr.bean <small><i>Posted on july 02 2020</i></small></h4>
										<p>hmmmmmmmm</p>
									</div>
								</div>

							</div>
						</div>
					</div>



					<!-- komentar 2 -->

					<div class="col-sm-3" style="background-color: yellow;height: 500px;">


						<div class="container-fluid" style="height: 500px;">
							<div class="media border p-3" style="">
								<img src="aset/mr.bean.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
								<div class="media-body">
									<h4>mr.bean <small><i>Posted on july 01, 2020</i></small></h4>
									<p>ini komentar</p>

									<div class="media p-3">
										<img src="aset/ultraman.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
										<div class="media-body">
											<h4>ultraman <small><i>Posted on july 02 2020</i></small></h4>
											<p>ahhhh masssaaa!!!</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- komentar 3 -->

					<div class="col-sm-3" style="background-color: green;height: 500px;">

						<div class="media border p-3" style="">
							<img src="aset/fizi.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
							<div class="media-body">
								<h4>fizi <small><i>Posted on july 01, 2020</i></small></h4>
								<p>maaf upin & ipin</p>

								<div class="media p-3">
									<img src="aset/uya.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
									<div class="media-body">
										<h4>uya kuya <small><i>Posted on july 02 2020</i></small></h4>
										<p>ceritakan masalah anda di rumah uya!!</p>
									</div>
								</div> 

							</div>
						</div>
					</div>

					<!-- komentar 4 -->

					<div class="col-sm-3" style="background-color: red;height: 500px;">
						<div class="media border p-3" style="">
							<img src="aset/nobita.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
							<div class="media-body">
								<h4>nobita <small><i>Posted on july 01, 2020</i></small></h4>
								<p>ada si bambang</p>

								<div class="media p-3">
									<img src="aset/mr.bean.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:50px;">
									<div class="media-body">
										<h4>mr.bean <small><i>Posted on july 02 2020</i></small></h4>
										<p>baso ada</p>
									</div>
								</div> 
							</div>
						</div>


					</div>
				</div>
			</div>

			<!-- footer -->
			<div class="col-12 bg-info text-light" style="height: 50px;">
				<marquee> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</marquee>

			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>