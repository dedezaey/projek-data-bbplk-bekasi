<?php 	
require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_barang WHERE id_barang='id'";

if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di hapus') </script>";
	echo "<script>window.location.assign('../index.php')</script>"; 
}else{
	echo "<script> alert ('data gagal di dihapus $conn->error')</script>";
	echo "<script> window.location.assign ('../index.php')</script> ";
}





?>