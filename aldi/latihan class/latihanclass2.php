<?php 
class KendaraanBermotor{
	protected $jumlahBan;
	protected $jenisMesin;
	protected $warnaKendaraan;
	protected $bahanBakar;

	function __construct($jmlBan,$jnsMesin, $wrnKendaraan, $bhnBakar){
		$this->jumlahBan = $jmlBan;
		$this->jenisMesin = $jnsMesin;
		$this->warnaKendaraan = $wrnKendaraan;
		$this->bahanBakar = $bhnBakar;
	}
	function setWarna($warnaBaru){
		$this->warnaKendaraan = $warnaBaru;
	}
	function getWarna(){
		return $this->warnaKendaraan;
	}
	function getBan(){
		return $this->jumlahBan;
	}
	function getJenisMesin(){
		return $this->jenisMesin;
	}
	function getBahanBakar(){
		return $this->bahanBakar;
	}
}

class Motor extends KendaraanBermotor{
	protected $jumlahBan = 2;
	function __construct($jnsMesin, $wrnKendaraan){
		$this->jenisMesin = $jnsMesin;
		$this->warnaKendaraan = $wrnKendaraan;
	}
}

class Mobil extends KendaraanBermotor{
	protected $jumlahBan = 4;
	function __construct($jnsMesin,$wrnKendaraan,$bhnBakar){
		$this->jenisMesin = $jnsMesin;
		$this->warnaKendaraan = $wrnKendaraan;
		$this->bahanBakar = $bhnBakar;
	}
}

$kendaraanZae = new KendaraanBermotor("3", "2 Tak", "Orange", "Solar");
$kendaraanAldi = new Mobil("4 Tak", "Pink", "Pertamax");
$kendaraanFaris = new Motor("4 Tak", "Biru", "Premium");
$kendaraanTio = new KendaraanBermotor("3", "2 Tak", "Hijau", "Biosolar");
$kendaraanRiski = new Mobil("4 Tak", "Silver", "Dexlite");
$kendaraanJapar = new Motor("4 Tak", "Gold", "Pertalite");


echo"Zaenudin memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanZae->getBan(). " dengan mesin ".$kendaraanZae->getJenisMesin(). " berwarna ".$kendaraanZae->getWarna()." dengan bahan bakar ".$kendaraanZae->getBahanBakar()."<br><hr>";
echo"Aldi memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanAldi->getBan()." dengan mesin ".$kendaraanAldi->getJenisMesin()." berwarna ".$kendaraanAldi->getWarna()." dengan bahan bakar ".$kendaraanAldi->getBahanBakar()."<br><hr>";
echo"Faris memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanFaris->getBan()." dengan mesin ".$kendaraanFaris->getJenisMesin()." berwarna ".$kendaraanFaris->getWarna()."<br><hr>";

echo"Setio memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanTio->getBan(). " dengan mesin ".$kendaraanTio->getJenisMesin(). " berwarna ".$kendaraanTio->getWarna()." dengan bahan bakar ".$kendaraanTio->getBahanBakar()."<br><hr>";
echo"Riski memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanRiski->getBan()." dengan mesin ".$kendaraanRiski->getJenisMesin()." berwarna ".$kendaraanRiski->getWarna()." dengan bahan bakar ".$kendaraanRiski->getBahanBakar()."<br><hr>";
echo"Japar memiliki kendaraan terbaru dengan teknologi terkini<br> dengan jumlah ban sebanyak ".$kendaraanJapar->getBan()." dengan mesin ".$kendaraanJapar->getJenisMesin()." berwarna ".$kendaraanJapar->getWarna()."<br><hr>";
?>