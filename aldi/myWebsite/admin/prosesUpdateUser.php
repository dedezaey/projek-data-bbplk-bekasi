<?php 
require_once "koneksi.php";
$id = $_GET['idUser'];
$nama = $_GET['namaUser'];
$email = $_GET['emailUser'];


$sql = "UPDATE tb_users SET nama_user='$nama', email_user='$email' WHERE id_user='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil diupdate')</script>";
	echo "<script>window.location.assign('index.php?p=FormInputUser')</script>";
}else{
	echo "<script>alert('Data gagal diupdate $conn->error')</script>";
	echo "<script>window.location.assign('index.php?p=FormInputUser')</script>";
}
?>