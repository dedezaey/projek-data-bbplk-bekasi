<?php 

$serverName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "db_toko_zae";

$conn = new mysqli($serverName, $userName, $passWord, $dbName);

if ($conn->connect_error) {
	die("koneksi gagal");
}

?>