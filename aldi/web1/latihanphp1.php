<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP1</title>
</head>
<body>
	<?php

	// $a = $_POST['angka'];
	// if($a<10) {
	// 	echo "variabel a lebih kecil dari 10";
	// } else {
	// 	echo "variabel a tidak lebih kecil dari 10";
	// }

	$a = $_POST['angka'];
	if($a>80){
		$grade ="grade A";
	} elseif ($a>70){
		$grade = "grade B";
	} elseif ($a>50){
		$grade = "grade C";
	} else {
		$grade = "grade D";
	}
	echo "Nilai anda: $a<br>";
	echo "Grade: $grade";


	?>
	<br>
	<a href="form_latihanphp.php">back</a>


</body>
</html>