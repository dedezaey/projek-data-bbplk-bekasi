<?php 
//mengunakan nilai ke dalam array

$mobil = array("zulka" =>"volvo" , "ali" => "BMW", "ajub"=> "toyota" );

//key atau kunci pada array diurutkan secara ascending
ksort($mobil);

//dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $kx => $nilai_x) {
	echo "kunci"= . $x .",nilainya=" . $nilai_x;
	echo "<br/>";
}
?>