<!DOCTYPE html>
<html>
<head>
	<title>float php</title>
</head>
<body>

	<?php
//CARA 1

	for ($a=1; $a<=5 ; $a++) {
		for ($b=$a; $b>=1 ; $b--) { 
			echo "*";
		}echo "<br>";
	}
	?>

	<?php 
//cara ke 2
	for ($a=1; $a <=100 ; $a++) { 
		for ($b=1; $b<=$a ; $b++) { 
			echo "*";
		}echo "<br>";
	}

	?>
</body>
</html>