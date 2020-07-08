<?php 
//memasukan nilai dalam array
$mobil=array("volvo","bmw","toyota");

//aay diurutkan secara ascending
sort($mobil);

//mendapatkan jumlah nilai dari aray $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilai dari aray
for ($x=0; $x <  $length: $x++) { 
	echo $mobil[$x];
	echo "<br/>";
}

?>

