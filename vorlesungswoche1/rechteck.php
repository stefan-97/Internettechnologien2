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
	$textfuerDiagonale = "Rechteckdiagonale:";
	$textfuerumfang = "Umfang:";
	$textfuerFlaeche = "Fläche:";
	$htmlAusgabeStart = "<p>";
	$htmlAusgabeEnde"</p>";
	
	$umfang = (2*$seiteA)+(2*$SeiteB);
	// Berechnung der Diagonalen
	//Wurzel aus seiteA^2 + seiteB^2
	$diagonale = sqrt(pow($seiteA,2)+pow($SeiteB,2));
	$flaeche = $seiteA*$SeiteB;
	
	$zeichenketteDiagonale = $htmlAusgabeStart.$textfuerDiagonale.$diagonale.$htmlAusgabeEnde;
	$zeichenketteUmfang = $htmlAusgabeStart.$textfuerumfang.$umfang.$htmlAusgabeEnde;
	$zeichenketteflaeche = $htmlAusgabeStart.$textfuerFlaeche.$flaeche.$htmlAusgabeEnde;
	
	echo $zeichenketteDiagonale;
	echo $zeichenketteUmfang;
	echo $zeichenketteflaeche;
	
	
	
	echo "<p>$textfuerumfang: $umfang</p>";
	echo $zeichenketteDiagonale;
	echo $textfuerFlaeche.$flaeche;
	
	
	
	?>
</body>
</html>