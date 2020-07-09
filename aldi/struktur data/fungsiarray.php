<?php 

//1. Fungsi sort//
//memasukan nilai ke dalam array//
$mobil=array("volvo","BMW","Toyota");

//array diurutkan secara ascending//
sort($mobil);

//mendapatkan jumlah nilai dari array $mobil//
$length=count($mobil);

//dengan looping menampilkan tiap nilai dari array//
for ($x=0; $x <$length ; $x++){ 
	echo $mobil[$x];
	echo "<br/>";
}

//2. Fungsi rsort//
//memasukan nilai ke dalam array//
$mobil=array("volvo","BMW","Toyota");

//array di urutkan secara descending//
rsort($mobil);

//mendapatkan jumlah nilai dari array $mobil//
$length=count($mobil);

//dengan looping menamilkan tiap nilai dari array//
for ($x=0; $x <$length ; $x++){ 
	echo $mobil[$x];
	echo "<br/>";
}

//3. Fungsi asort//
//memasukan nilai ke dalam array//
$mobil=array("Zulka"=>"volvo", "Ali"=>"BMW","Ajuab"=>"Toyota");

//nilai array di urutkan secara ascending//
asort($mobil);

//dengan looping menapilkan tiap nilai dari array//
foreach ($mobil as $x => $nilai_x){
	echo "Kunci=" . $x .",Nilainya=" . $nilai_x;
	echo "<br/>";
}

//4. Fungsi ksort//
//memasukan nilai ke dalam array//
$mobil=array("Zulka"=>"volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//key atau kunci pada array di urutkan secara ascending//
ksort($mobil);

//dengan looping menampilkan tiap nilai dari array//
foreach ($mobil as $x => $nilai_x){
	echo "Kunci=" . $x .",Nilainya=" . $nilai_x;
	echo "<br/>";
}

//5. Fungsi arsort//
//memasukan nilai ke dalam array//
$mobil=array("Zulka"=>"volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//nilai pada array di urutkan secara descending//
arsort($mobil);

//dengan looping menampilkan tiap nilai dari array//
foreach ($mobil as $x => $nilai_x){
	echo "Kunci=" . $x .",Nilainya=" . $nilai_x;
	echo "<br/>";
}

//6. Fungsi krsort//
//memasukan nilai ke dalam array//
$mobil=array("Zulka"=>"volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

//nilai pada array di urutkan secara descending//
krsort($mobil);

//dengan looping menampilkan tiap nilai dari array//
foreach ($mobil as $x => $nilai_x){
	echo "Kunci=" . $x .",Nilainya=" . $nilai_x;
	echo "<br/>";
}
?>