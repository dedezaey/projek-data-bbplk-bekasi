<!DOCTYPE html>
<html>
<head>
	<title>data_login</title>
</head>
<body>

	<?php
	$email = $_POST["email"];
	$katasandi = $_POST["katasandi"];  

	if ($email== 'mjaenudin') {
		if ($katasandi== 'adam') {
			echo "anda berhasil login";
		}else {
			echo "pasword anda salah";
		}
	}else {
		echo "email salah";
	}
	echo "<br>";
	?>


	<a href="login.php">
		"kembali "
	</a>

</body>
</html>