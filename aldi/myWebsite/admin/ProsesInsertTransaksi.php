<?php
require_once 'koneksi.php';

if(isset($_POST['submitTemp'])){
	$idBarang = $_POST['idBarang'];
	$sql = "SELECT*FROM tb_barang WHERE id_barang='$idBarang'";
	$result = $conn->query($sql);
	while($row=$result->fetch_assoc()){
		$namaBarang = $row['nama_barang'];
		$satuanBarang = $row['satuan_barang'];
		$hargaBarang = $row['harga_barang'];
	}

	$jumlahBeli = $_POST['jumlahBeli'];

	$sql2 = "INSERT INTO tb_temp VALUES('$idBarang', '$namaBarang', '$satuanBarang', '$hargaBarang', '$jumlahBeli')";
	if($conn->query($sql2) === TRUE){
		echo "<script>alert('Data Berhasil Disimpan')</script>";
		echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan')</script>";
		echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>"; 
	}
}elseif(isset($_POST['submitTrans'])){ 
	//Akan dijalankan jika tombol Simpan Transaksi dipilih
	$noTransaksi = $_POST['noTransaksi'];
	$tglTransaksi = $_POST['tanggalTransaksi'];
	$idUser = $_POST['idUser'];
	$grandTotal = $_POST['grandTotal'];

	$sql1 = "INSERT INTO tb_header_transaksi VALUES('$noTransaksi','$tglTransaksi','$idUser','$grandTotal')";
	if($conn->query($sql1) === TRUE){
	//Jika berhasil maka semua record dari tb_temp akan dipindahkan ke tb_detail_transaksi
		$sql2 = "SELECT*FROM tb_temp";
		$result = $conn->query($sql2);
		while($row=$result->fetch_assoc()){
			$idBarang = $row['id_barang'];
			$hargaBarang = $row['harga_barang'];
			$jumlahBeli = $row['jumlah_beli'];
			$sql3 = "INSERT INTO tb_detail_transaksi VALUES('$noTransaksi','$idBarang','$hargaBarang','$jumlahBeli')";
			$conn->query($sql3);
		}
		//Mengosongkan tb_temp
		$conn->query("TRUNCATE TABLE tb_temp");
		echo "<script>alert('Data Berhasil Disimpan')</script>";
		echo "<script>window.location.assign('index.php?p=DataTransaksi')</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan')</script>";
		echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>";
	}
}else{
	echo "<script>window.location.assign('index.php?p=FromTableTransaksi')</script>";
}