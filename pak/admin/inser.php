<?php 	
require_once "koneksi.php";
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];
$password = md5($_POST['passwordUser']);


$sql = "INSERT INTO tb_user values(null, '$nama','$email','$password')";
if ($conn->query($sql) === TRUE) {
	echo"<script>alert ('data berhasil di simpan') </script>";
	echo "<script>window.location.assign('../index.php?p=user')</script>"; 
}else{
	echo "<script> alert ('data gagal di simpan $conn->error')</script>";
	echo "<script> window.location.assign ('../index.php?p=user')</script> ";
}






?>