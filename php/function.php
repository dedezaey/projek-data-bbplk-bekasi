<?php 

function no1(){
	echo("halo perkenalkan nama saya zaenudin<br>");
	echo("senang berkenalan dengan anda<br>");

	echo("<hr>");
}


function no2($nama, $salam, ){
	echo("$salam, perkenalkan nama saya $nama <br>");
	echo("senang beerkenalan dengan anda <br>");
	echo("sampai jumpa <hr>");
}

//ripten
function no3($nama="fulan, $salam="asalamualaikum, ){
	echo("$salam, perkenalkan nama saya $nama <br>");
	echo("senang beerkenalan dengan anda <br>");
	echo("sampai jumpa <hr>");
}

//fungsi yang mengembalikan nilai


function hitungluassegitiga($alas, $tinggi, ){
	$luas = $alas * $tinggi / 2;
	return $luas;
}
function hitungkelilingsegitiga ($a,$b,$c){
	$kel = $a + $b +$c;
	return$kel;
}







no1();

no2("sony","selamat pagi");
no2("nita", "asalamualaikum");
no3()
echo("luas segitiga dengan alas sebesar 3cm dan tinggi 4 cm adalah :").hitungluassegitiga(3,4);
//pakai nama


?>
