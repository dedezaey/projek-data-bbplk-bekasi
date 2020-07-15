<?php 	
require_once "koneksi.php";
$nama = $_POST['namaBarang'];
$jenis = $_POST['satuanBarang'];
$harga = $_POST['hargaBarang'];



$sql = "INSERT INTO tb_barang values(null, '$nama','$jenis','$harga')";
if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di simpan') </script>";
	echo "<script>window.location.assign('../index.php')</script>"; 
}else{
	echo "<script> alert ('data gagal di simpan $conn->error')</script>";
	echo "<script> window.location.assign ('../index.php')</script> ";
}






?>