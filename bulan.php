<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	$day=date('l');
	switch ($day) {
		case 'Sunday';
		$hari ="minggu";
		break;
		case 'Monday';
		$hari = "senin";
		break;
		case 'Tuesday':
		$hari ="selasa";
		break;
		case 'Wednesday':
		$hari = "rabu";
		break;
		case 'Thursday':
		$hari = "kamis";
		break;
		case 'riday':
		$hari = "jumat";
		break;
		case 'Saturday':
		$hari = "sabtu";
		break;
	};

	$mounth=date('F');
	switch ($mounth) {
		case 'January';
		$bulan ="januari";
		break;
		case 'February';
		$bulan = "febuari";
		break;
		case 'March':
		$bulan ="maret";
		break;
		case 'April':
		$bulan = "april";
		break;
		case 'May':
		$bulan = "mei";
		break;
		case 'June':
		$bulan = "juni";
		break;
		case 'July':
		$bulan = "juli";
		break;
		case 'August':
		$bulan = "Agustus";
		break;
		case 'September':
		$bulan = "September";
		break;
		case 'November':
		$bulan = "November";
		break;
		case 'December':
		$bulan = "December";
		break;


	};

	echo date('H;i;s') . "," . $hari; . $bulan; . date('Y') ;
	



	?>
</body>
</html>