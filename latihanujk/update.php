<?php 
require_once "konksi.php";
$id = $_GET['idBuku'];
$nama = $_GET['namaBuku'];
$penerbit = $_GET['namaPenerbit'];
$penulis = $_GET['namaPenulis'];
$tahun = $_GET['tahunTerbit'];



$sql = "UPDATE toko_buku SET nama_buku='$nama', nama_penerbit='$penerbit' , nama_penulis = '$penulis' , tanggal_terbit = '$tahun' WHERE id_buku='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil diupdate')</script>";
	echo "<script>window.location.assign('index2.php')</script>";
}else{
	echo "<script>alert('Data gagal diupdate $conn->error')</script>";
	echo "<script>window.location.assign('index2.php')</script>";
}
?>

