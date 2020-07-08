<?php 
//memasukan nilai ke dalam array
$mobil = array("zulka" =>"volvo" , "ali" =>"BMW", "ajuab"=>"toyota");

//nilai pada array diurutkan secara discending
arsort($mobil);

//dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x => $nilai_x) {
	echo "kunci =" . $x . "nilainya=" . $nilai_x;
	echo "<br/>"
}
?>