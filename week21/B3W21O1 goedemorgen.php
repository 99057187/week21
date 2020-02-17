<?php
	date_default_timezone_set("Europe/Amsterdam");
	$time= date("H:i:s");
	$outputtekst="";
	$imgageScr="";
	if ($time <6) {
		$outputtekst="Goede Nacht";
		$imageScr="foto's/night.png";
	}
	else if ($time >=6 && $time<12 ) {
		$outputtekst="Goede morgen";
		$imageScr="foto's/morning.png";
	}
	else if ($time >=12 && $time<18) {
		$outputtekst="Goede middag";
		$imageScr="foto's/afternoon.png";
	}
	else if ($time >=18) {
		$outputtekst="Goede avond";
		$imageScr="foto's/evening.png";
	}
	$page = $_SERVER['PHP_SELF'];
	$sec = "1";
	echo 15-$time;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
		<link rel="stylesheet" type="text/css" href="B3W21O1 goedemorgen.css">
		<title><?=$outputtekst?></title>
	</head>
	<body>
			<img src="<?=$imageScr?>" id="background">
			<div id="plaats">
				<h1><?=$outputtekst?></h1>
				<h1><?= "het is nu " . date("H:i:s")?></h1>
			</div>
	</body>
</html>