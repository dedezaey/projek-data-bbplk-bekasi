<?php 
require_once "koneksi.php";
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$harga = ($_POST['hargaBarang']);

$sql = "INSERT INTO tb_barang VALUES(null,'$nama','$satuan','$harga')";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil disimpan')</script>";
	echo "<script>window.location.assign('index.php?p=FormInputBarang')</script>";
}else{
	echo "<script>alert('Data gagal disimpan $conn->error')</script>";
	echo "<script>window.location.assign('index.php?p=FormInputBarang')</script>";
}

?>