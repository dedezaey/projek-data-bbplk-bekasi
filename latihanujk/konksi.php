<?php 

$serverName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "sj_buku";

$conn = new mysqli($serverName, $userName, $passWord, $dbName);

if ($conn->connect_error) {
	die("koneksi gagal");
}

?>