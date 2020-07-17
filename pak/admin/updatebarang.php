<?php 	
require_once "koneksi.php";
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$id = $_POST['idBarang'];
$harga = $_POST['hargaBarang'];



$sql = "UPDATE tb_barang SET nama_barang ='$nama', satuan_barang='$satuan', 'harga_barang =$harga' WHERE barang='$id' ";
if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di update') </script>";
	echo "<script>window.location.assign('../index.php?p=barang')</script>"; 
}else{
	echo "<script> alert ('data gagal di update $conn->error')</script>";
	echo "<script> window.location.assign ('../index.php?p=barang')</script> ";
}





?>