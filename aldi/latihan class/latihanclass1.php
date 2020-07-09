<?php 


class Mobil{
	private $warna;
	public $merk;

	public function setWarna($warnaBaru){
		$this->warna = $warnaBaru;
	}
	public function getWarna(){
		return $this->warna;
	}
}

$mobilAldi = new Mobil();
$mobilAldi2 = new Mobil();
$mobilAldi3 = new Mobil();
$mobilAldi ->setWarna("Hitam");
$mobilAldi2 ->setWarna("Gold");
$mobilAldi3 ->setWarna("Silver");

echo "Mobil Aldi adalah berwarna" .$mobilAldi->getWarna()."<br>";
// echo "Mobil Aldi adalah berwarna" .$mobilAldi->warna."<br>";

$mobilAldi->setWarna("Biru");
echo "Warna Mobil Aldi yang terbaru adalah" .$mobilAldi->getWarna()."<br>";

$mobilAldi->setWarna("Hijau");
echo "Warna Mobil Aldi yang ke dua adalah" .$mobilAldi2->getWarna()."<br>";

$mobilAldi->setWarna("Ungu");
echo "Warna Mobil Aldi yang ke tiga adalah" .$mobilAldi3->getWarna()."<br>";

?>
