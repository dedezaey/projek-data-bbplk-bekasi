<?php 
require_once "koneksi.php";
$id = $_GET['id'];


$sql = "DELETE FROM tb_buku WHERE id_buku='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil dihapus')</script>";
	echo "<script>window.location.assign('DataBuku.php')</script>";
}else{
	echo "<script>alert('Data gagal dihapus $conn->error')</script>";
	echo "<script>window.location.assign('DataBuku.php')</script>";
}

?>