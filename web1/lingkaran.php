<?php 
include_once 'myfunction.php';

// if (isset($_GET['jari'])){
// 	$r = $_GET['jari'];
// 	$luas = hitungLuasLingkaran($r);
// 	$kel = hitungKelilingLingkaran($r);
// }else{
// 	$luas = 0;
// 	$kel = 0;
// }

//Persegipanjang//
if(isset($_GET['submit1'])){
	$p = $_GET['panjang'];
	$l = $_GET['lebar'];
	$luasPersegipanjang = hitungLuasPersegipanjang($p,$l);
	$kelPersegipanjang = hitungKelilingPersegipanjang($p,$l);
}else{
	$luasPersegipanjang = 0;
	$kelPersegipanjang = 0;
}

//Persegi
if(isset($_GET['submit2'])){
	$sisi = $_GET['sisi'];
	$luas_Persegi = hitungLuasPersegi($sisi);
	$kel_Persegi = hitungKelilingPersegi($sisi);
}else{
	$luas_Persegi = 0;
	$kel_Persegi = 0;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>luas lingkaran</title>
</head>
<body>
	<h2 align="center">Perhitungan Bangun Dasar</h2>
	<!-- <form action="" method="">
		jari jari Lingkaran:<input type="number" name="jari" require><br>
		<input type="submit" value="hitung">
	</form>
	<hr>
	Luas Lingkaran : <?=$luas;?>
	Keliling Lingkaran : <?=$kel?> -->

	<!-- Persegipanjang -->
	<form action="" method="">
		<fieldset>
			<h3>Hitung Luas dan Keliling Persegi Panjang</h3>
			panjang: <input type="number" name="panjang">
			lebar: <input type="number" name="lebar">
			<input type="submit" name="submit1" value="hitung">
		</form><br><br>
		Luas Persegipanjang : <?=$luasPersegipanjang?>
		Keliling Persegipanjang : <?=$kelPersegipanjang?>
	</fieldset>

	<!-- Persegi -->
	<form action="" method="">
		<fieldset>
			<h3>Hitung Luas dan Keliling Persegi</h3>
			Persegi: <input type="number" name="sisi">
			<input type="submit" name="submit2" value="hitung">
		</form><br><br>
		Luas Persegi : <?=$luas_Persegi;?>
		Keliling Persegi : <?=$kel_Persegi;?>
	</fieldset>
</body>
</html>