<?php 	
require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_user WHERE id_user='id'";

if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di hapus') </script>";
	echo "<script>window.location.assign('from3.php')</script>"; 
}else{
	echo "<script> alert ('data gagal di dihapus $conn->error')</script>";
	echo "<script> window.location.assign ('from3.php')</script> ";
}





?>