<?php 
//lingkaran
function hitungluaslingkaran($r){
	$luas =3.14 * $r * $r;
	return $luas;
}

function hitungkelilinglingkaran($r){
	$kel = 3.14 * 2 * $r;
	return $kel;
}

//persegi panjang
function luaspanjang($p,$l){
	$luaspanjang =  $p * $l;
	return $luaspanjang;
}
function klilingpanjang($p,$l){
	$kelpanjang = 2 * $p * $l;
	return $kelpanjang;
}

//persegi
function luaspersegi($s){
	$luaspersegi =  $s * $s;
	return $luaspersegi;
}
function klilingpersegi($s){
	$kelpersegi = 4 * $s;
	return $kelpersegi;
}



?>



