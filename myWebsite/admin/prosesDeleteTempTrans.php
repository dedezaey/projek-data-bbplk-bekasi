<?php
require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_temp WHERE id_barang='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data Berhasil DiHapus')</script>";
	echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>";
}else{
	echo "<script>alert('Data Gagal DiHapus $conn->error')</script>";
	echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>";
}
?>