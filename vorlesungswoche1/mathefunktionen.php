<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arbeiten mit mathematischen Funktionen</title>
</head>

<body>
	<?php
	/*
		https://www.php.net/manual/en/book.math.php
	*/
	$seiteA = 10;
	$SeiteB = 20;
	$umfang = (2*$seiteA)+(2*$SeiteB);
	echo $umfang;
	// Berechnung der Diagonalen
	//Wurzel aus seiteA^2 + seiteB^2
	echo "<br>";
	echo sqrt(pow($seiteA,2)+pow($SeiteB,2));
	echo "<br>";
	
	?>
</body>
</html>