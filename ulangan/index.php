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
<body style="background-color: rgb(0,0,0);">








	<div class="col-12" style="min-height:1350px; margin-top: 10px; margin-bottom: 10px;">
		<div class="row justify-content-center mt-5">
			<div class="card">
				<div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
				<div class="card-body">


					<h3>Halaman Login </h3>
					
					<form action="prosesInputLogin.php" method="post" onSubmit="return validasi()">
						<div>
							<label>Email:</label>
							<input type="text" name="emailUser" id="emailUser">
						</div>
						<div>
							<label>Password:</label>
							<input type="password" name="passwordUser" id="passwordUser" />
						</div>			
						<div>
							<input type="submit" value="Login" class="tombol">
						</div>
					</form>
				</div>
			</div>
		</div>


	</div>

</script>
</html>