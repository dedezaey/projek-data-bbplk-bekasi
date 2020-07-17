<?php 	
require_once "konksi.php";
$nama = $_POST['namaBuku'];
$penerbit = $_POST['namaPenerbit'];
$penulis = $_POST['namaPenulis'];
$tahun = $_POST['tahunTerbit'];



$sql = "INSERT INTO toko_buku values(null, '$nama','$penerbit','$penulis', '$tahun')";
if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di simpan') </script>";
	echo "<script>window.location.assign('index2.php')</script>"; 
}else{
	echo "<script> alert ('data gagal di simpan $conn->error')</script>";
	echo "<script> window.location.assign ('index2.php')</script> ";
}






?>