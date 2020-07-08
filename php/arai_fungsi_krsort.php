<?php 
//memasukan nilai kedalam arrray
$mobil = array("zulka" =>"volvo" ,"ali"=>"BMW"=> , "ajuab"=>"toyota" );

//kunci atau key pada array diurutkan secara descending
krsort($mobil);

//dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x => $nilai_x) {
	echo "kunci=" . $x .", nilainya=" . $nilai_x;
	echo "<br/>"
}

?>