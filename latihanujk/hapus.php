<?php 
require_once "konksi.php";
$id = $_GET['id'];


$sql = "DELETE FROM toko_buku WHERE id_buku='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil dihapus')</script>";
	echo "<script>window.location.assign('index2.php')</script>";
}else{
	echo "<script>alert('Data gagal dihapus $conn->error')</script>";
	echo "<script>window.location.assign('index2.php')</script>";
}

?>