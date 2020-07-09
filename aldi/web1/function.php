<?php 

function perkenalan(){
	echo "Hallo perkenalan nama saya Aldi<br>";
	echo "Senang berkenalan dengan kamu<br>";
	echo "Sampai berjumpa lagi<br>";
	echo "<hr>";
}

//function dengan parameter
function perkenalankedua($nama="Nita", $salam="Assalamualaikum"){
	echo "$salam, perkenalkan nama saya $nama<br>";
	echo "Senang berkenalan dengan kamu<br>";
	echo "Sampai berjumpa lagi<br>";
	echo "<hr>";
}

perkenalan();
perkenalankedua("Aldi","Morning");
perkenalankedua("Aisyah");
perkenalankedua();

function hitungLuasSegitiga($alas, $tinggi){
	$luas = $alas * $tinggi / 2;
	return $luas;
}

function hitungKelilingSegitiga($a, $b, $c){
	$kel = $a + $b + $c;
	return $kel;
}

echo "Luas segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah".hitungLuasSegitiga(3, 4)."<br>";
echo "keliling segitiga dengan siss sebesar 3cm 4cm 6cm adalah".hitungKelilingSegitiga(3, 4,6)."<br>";


function hitungUmur($tahunLahir,$tahunSekarang){
	$umur = $tahunSekarang - $tahunLahir;
	return $umur;
}

$tahunSekarang = date('Y');

echo "umur saya adalah".hitungUmur(1998, $tahunSekarang). "<br>";
?>