<?php
	date_default_timezone_set("Europe/Amsterdam");
	$time= date("H");
	$outputtekst="";
	$imgageScr="";
	if ($time <6) {
		$outputtekst="Goede Nacht";
		$imageScr="night.png";
	}
	else if ($time >=6 && $time<12 ) {
		$outputtekst="Goede morgen";
		$imageScr="morning.png";
	}
	else if ($time >=12 && $time<18) {
		$outputtekst="Goede middag";
		$imageScr="afternoon.png";
	}
	else if ($time >=18) {
		$outputtekst="Goede avond";
		$imageScr="evening.png";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="B3W21O1 goedemorgen.css">
		<title><?=$outputtekst?></title>
	</head>
	<body>
			<img src="<?=$imageScr?>" id="background">
			<div id="plaats">
				<h1><?=$outputtekst?></h1>
				<h1><?= "het is nu " . date("H:i")?></h1>
			</div>
	</body>
</html>