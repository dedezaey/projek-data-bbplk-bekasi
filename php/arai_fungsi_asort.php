<?php 
//mengunakan nilai ke dalam arai
$mobil=array("zulka"=>"volvo","ali"=>"BMW", "ajuab"=>"toyota");

//nilai pada array diurutkan secara ascending 
asort($mobil);

//dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $kx => $nilai) {
	echo"kunci"= . $x . ", nilainya=" . $nilai_x;
	echo "<br/>";
}

?>