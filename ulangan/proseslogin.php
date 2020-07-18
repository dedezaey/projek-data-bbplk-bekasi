<?php 
require_once "koneksi.php";

$email = $_POST['emailUser'];
$password = md5($_POST['passwordUser']);

$sql = "SELECT email_user, password_user FROM tb_users where email_user ='$email' and password_user ='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<script>alert('login berhasil')</script>";
	echo "<script>window.location.assign('formbarang.php')</script>";
}else{
	echo "<script>alert('selamat datang $conn->error')</script>";
	echo "<script>window.location.assign('formbarang.php')</script>";
}

?>