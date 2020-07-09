<?php 

$jumlah_bayar = $_POST['jumlah_bayar'];
$total_harga = $_POST['total_harga'];
$kembali = number_format($jumlah_bayar - $total_harga,0,",",".");

if($total_harga>$jumlah_bayar){
	echo "<script>alert('terimakasih, uang kembali anda sebesar Rp.$kembali')</script>";
	echo "<script>window.location.assign('formpenjualanbarang.php')</script>";
}elseif($total_harga<$jumlah_bayar){
	echo "<script>alert('maaf uang bayar anda kurang')</script>";
	echo "<script>window.history.back()<script/>";
}else{
	echo "<script>alert('terimakasih')</sript>";
	echo "<script>window.location.assign('formpenjualanbarang.php')</script>";
}
// $nama_barang = $_POST['nama_barang'];
// $harga_barang = $_POST['harga_barang'];
// $jumlah_barang = $_POST['jumlah_barang'];
// $total_harga = $harga_barang*$jumlah_barang;

// echo "Nama barang: $nama_barang <br>";
// echo "Harga barang: $harga_barang <br>";
// echo "Jumlah barang: $jumlah_barang <br>";
// echo "Total harga: $total_harga <br>";

// echo "Uang bayar:<form><input type='number' name='uang_bayar'>
// </form> <br>";
// echo "<form action='proses2.php' method='post'><button type='submit' class='btn btn-primary btn-lg' name='bayar'>Bayar</button></form>";
?>