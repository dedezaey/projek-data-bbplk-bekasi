<?php 	
require_once "koneksi.php";
$password = md5("admin");

$sql = "INSERT INTO tb_user values(null, 'zae','zae@gmail.com','$password')";
if ($conn->query($sql) === TRUE) {
	echo("data berhasil dimasukan");
}else{
	echo("data gagal dimasukan") .$conn->error;
}


?>