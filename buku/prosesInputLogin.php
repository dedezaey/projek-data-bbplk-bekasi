<?php 
require_once "koneksi.php";

$email = $_POST['emailUser'];
$password = md5($_POST['passwordUser']);

$sql = "SELECT email_user, password_user FROM tb_users where email_user ='$email' and password_user ='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<script>alert('login berhasil')</script>";
	echo "<script>window.location.assign('DataBuku.php')</script>";
}else{
	echo "<script>alert('Login gagal $conn->error')</script>";
	echo "<script>window.location.assign('FormLogin.php')</script>";
}

$cek = mysql_num_rows($sql);

if($cek > 0){
	session_start();
	$_SESSION['emailUser'] = $email;
	$_SESSION['status login'] ;
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}

?>