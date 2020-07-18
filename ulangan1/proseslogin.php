<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>proseslogin</title>
</head>
<body>
	<?php 
	$username = $_POST['emailUser'];
	$password = $_POST['passwordUser'];

	if ($username=="zaenudin"){
		if($password=="mjaenudin"){
			echo "<script>alert('login berhasil')</script>";
			echo "<script>window.location.assign('formbarang.php')</script>";
		}else{
			echo "<script>alert('password salah $conn->error')</script>";
			echo "<script>window.location.assign('index.php')</script>";
		}
	}else{
		echo "<script>alert('selamat datang $conn->error')</script>";
		echo "<script>window.location.assign('formbarang.php')</script>";
	}

	?>

</body>
</html>

