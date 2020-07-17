<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>proseslogin</title>
</head>
<body>
	<?php 
	$username = $_POST['ryanaldirivans'];
	$password = $_POST['password1'];

	if ($username=="ryanaldirivans"){
		if($password=="password1"){
			echo "selamat anda berhasil login";
		}else{
			echo "password atau username yang anda masukan salah";
		}
	}else{
		echo "username anda salah";
	}

	?>

</body>
</html>