<?php 	
require_once "koneksi.php";
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];
$id = $_POST['idUser'];


$sql = "UPDATE tb_user SET name_user='$nama', email_user='$email' WHERE id_user='$id' ";
if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di update') </script>";
	echo "<script>window.location.assign('../index.php?p=user')</script>"; 
}else{
	echo "<script> alert ('data gagal di update $conn->error')</script>";
	echo "<script> window.location.assign ('../index.php?p=user')</script> ";
}





?>