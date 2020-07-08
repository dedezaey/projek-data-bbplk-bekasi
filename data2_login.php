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
		$bukti = 'email benar';
	}else {
		$bukti = 'email salah';
	}
	if ($katasandi== 'ultraman') {
		$kata = 'katasandi benar';
	}else {
		$kata = 'katasandi salah';
	}

	echo "$bukti <br>";
	echo "$kata<br>";
	

	?>
	<a href="login.php">
		"kembali "
	</a>

</body>
</html>