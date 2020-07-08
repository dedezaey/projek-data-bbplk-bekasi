<?php 
//mengunakan nilai ke dalam arra
$mobil=array("volvo","bmw","oyota");

//array diurutkan secara descending
rsort($mobil);

//mendapakan jumlah nilai array $mobil


$length=count($mobil);

//dengan looping tiap nilai dari array
for ($x=0; $x < $length; $x++) { 
	echo $mobil[$x];
	echo("<br/>");
}

?>