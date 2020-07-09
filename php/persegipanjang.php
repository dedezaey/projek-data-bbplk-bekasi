<?php 
include_once 'myfunction.php';


if (isset($_GET['panjang'])) {
	$p = $_GET['panjang'];
	$l = $_GET['panjang'];
	$luaspanjang = luaspanjang($p, $l);
	$kelpanjang = klilingpanjang($p, $l);	
}else{
	$luas = 0;
	$kel = 0;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>menyambungkan function</title>
</head>
<body>


	<form action="" method="">
		luas : <input type="number" name="panjang" require><br>
		panjang<input type="number" name="panjang" require><br>
		<input type="submit" name="hitung" value="hitung">

	</form>

	luas persegi : <?php  echo($luaspanjang) ?>
	keliling persegi : <?php  echo($kelpanjang) ?>
</body>
</html>