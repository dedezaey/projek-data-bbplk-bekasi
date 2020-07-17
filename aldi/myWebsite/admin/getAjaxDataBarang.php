<?php
require_once 'koneksi.php';
$id = $_POST['id'];

$sql = "SELECT*FROM tb_barang WHERE id_barang='$id'";
$result = $conn->query($sql);
$row= $result->fetch_assoc();

//Mengubah data array dari $row menjadi bertipe json
$json_data = json_encode($row);

//Memberikan keluaran dengan nilai $json_data
echo $json_data;
?>