<?php 
require_once "koneksi.php";
$id = $_POST['idBuku'];
$nama = $_POST['namaBuku'];
$penerbit = $_POST['namaPenerbit'];
$penulis = $_POST['namaPenulis'];
$tahun = $_POST['tahunTerbit'];


$sql = "UPDATE tb_buku SET nama_buku='$nama', nama_penerbit='$penerbit',nama_penulis='$penulis', tahun_terbit='$tahun' WHERE id_buku='$id'";

if($conn->query($sql) === TRUE){
	echo "<script>alert('Data berhasil diupdate')</script>";
	echo "<script>window.location.assign('DataBuku.php')</script>";
}else{
	echo "<script>alert('Data gagal diupdate $conn->error')</script>";
	echo "<script>window.location.assign('DataBuku.php')</script>";
}
?>