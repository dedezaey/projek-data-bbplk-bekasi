<?php 

$totalharga = $_POST['total_harga'];
$uangbayar = $_POST['uangbayar'];

if ($totalharga<$uangbayar) {
	echo "<script> alert ('maaf uang bayar anda kurang')</script>";
	echo "<script> window.history.back ()</script>";
}elseif($totalharga>$uangbayar) {
	$uangkembali = number_format($uangbayar + $totalharga,0,",",".");
	echo "<script> alert ('trimakasih uang kembali anda sebesar Rp.$uangkembali');</script>";
	echo "<script> window.history.back</script>";
}else{
	echo "
	<script> alert('trimakasih'); </script>";
	echo "
	<script> window.location.assign</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>


	<title>hasil</title>
</head>
<body>
	<a href="from.php">kembali ke menu awal</a>
	<a href="harga.php">kembali ke sebelumnya</a>

</body>
</html>