<?php 

$jumlah_bayar = $_POST['jumlah_bayar'];
$total_harga = $_POST['total_harga'];
$kembali = number_format($jumlah_bayar - $total_harga,0,",",".");

if($total_harga>$jumlah_bayar){
	echo "<script>alert('maaf uang bayar anda kurang')</script>";
	echo "<script>window.location.assign('index.php?p=FormPenjualanBarang')</script>";
}elseif($total_harga<$jumlah_bayar){
	echo "<script>alert('terimakasih')</script>";
	echo "<script>window.history.back()</script>";
}else{
	echo "<script>alert('terimakasih, uang kembali anda sebesar Rp.$kembali')</sript>";
	echo "<script>window.location.assign('index.php?p=FormPenjualanBarang')</script>";
}

?>
