<?php 
/**
 * 
 */
class mobil{
	private $warna;
	public $merk;
	
	public function setwarna($warnabaru){
		$this->warna = $warnabaru;
	}

	public function getwarna(){
		return $this->warna;
	}

}

$mobilzae = new mobil();
$mobilzae2 = new mobil();
$mobilzae3 = new mobil();

$mobilzae->setwarna("pink,");
$mobilzae2->setwarna("blue,");
$mobilzae3->setwarna("red,");



echo("warna mobil zae yang terbaru adalah ") .$mobilzae->getwarna()."<br>";
echo("<hr>");



echo("warna mobil zae yang terbaru adalah ") .$mobilzae2->getwarna()."<br>";
echo("<hr>");


echo("warna mobil zae yang terbaru adalah ") .$mobilzae3->getwarna()."<br>";
echo("<hr>");




?>