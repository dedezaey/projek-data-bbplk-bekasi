<?php 	
require_once "koneksi.php";

$email = $_POST['emailUser'];
$password = md5($_POST['passwordUser']);

$sql = "SELECT email_user, password_user FROM tb_user WHERE email_user='$email' AND password_user='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	echo"<script>alert ('selamat datang') </script>";
	echo "<script>window.location.assign('from3.php')</script>"; 
}else
{
	echo"<script>alert ('data yanganda masukan gagal') </script>";
	echo "<script>window.location.assign('login.php')</script>"; 
}





?>