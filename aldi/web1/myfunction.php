<?php 
// function hitungLuasLingkaran($r){
// 	$luas = 3.14 * $r *$r;
// 	return $luas;
// }

// function hitungKelilingLingkaran($r){
// 	$kel = 3.14 * 2 * $r;
// 	return $kel;
// }

function hitungLuasPersegipanjang($p, $l){
	$luasPersegipanjang = $p*$l;
	return $luasPersegipanjang;
}

function hitungKelilingPersegipanjang($p, $l){
	$kelPersegipanjang = 2 * ($p+$l);
	return $kelPersegipanjang;

}

function hitungLuasPersegi($sisi){
	$luasPersegi = $sisi * $sisi;
	return $luasPersegi;
}

function hitungKelilingPersegi($sisi){
	$kelPersegi = 4 * $sisi;
	return $kelPersegi;
}
?>