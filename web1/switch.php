<?php 
$day=date('l');

switch ($day){
	case 'Sunday':
	$hari='Minggu';
	break;
	case 'Monday':
	$hari='Senin';
	break;
	case 'Tuesday':
	$hari='Selasa';
	break;
	case 'Wednesday':
	$hari='Rabu';
	break;
	case 'Thursday':
	$hari='Kamis';
	break;
	case 'Friday':
	$hari='Jumat';
	break;
	case 'Saturday':
	$hari='Sabtu';
	break;
	default:
	$hari='Tidak di ketahui';
	break;

}
echo "$day <br>";
echo "$hari <br>";

$month=date('F');

switch ($month){
	case 'January':
	$bulan='Januari';
	break;
	case 'February':
	$bulan='Februari';
	break;
	case 'March':
	$bulan='Maret';
	break;
	case 'April':
	$bulan='April';
	break;
	case 'May':
	$bulan='Mei';
	break;
	case 'June':
	$bulan='Juni';
	break;
	case 'July':
	$bulan='Juli';
	break;
	case 'August':
	$bulan='Agustus';
	break;
	case 'September':
	$bulan='September';
	break;
	case 'October':
	$bulan='Oktober';
	break;
	case 'November':
	$bulan='November';
	break;
	case 'December':
	$bulan='Desember';
	break;
	default:
	$bulan='Tidak di ketahui';
	break;

}

echo "$month <br>";
echo "$bulan <br> <br>";

echo date('H;i;s'),"," .$hari . $bulan .date('Y');

?>