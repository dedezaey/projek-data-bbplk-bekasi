<!DOCTYPE html>
<html>
<head>
	<title>data for</title>
</head>
<body>
	<?php 

	for ($a=1; $a <= $_POST["angka"]; $a++) { 
		for ($b=1; $b<=$a ; $b++) { 
			echo "*";
		}echo "<br>";
	}

	?>

	<a href="form_for.php">kembali</a>
</body>
</html>