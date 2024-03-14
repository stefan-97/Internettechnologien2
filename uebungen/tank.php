<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung der Tankkosten</title>
</head>

<body>
	<?php
		// Definition der benötigten Variablen 
		$liter=60;
		$preis=1.53;
		// Optional mit Mehrwertsteuer bspw. 19 %
		$mwst=0.19;  
		// Du bist an der Reihe!
		$gesamtOhneMwst = $liter*$preis; // Programmiere die Berechnung der Gesamtsumme ohne Mehrwertsteuer
		
	
		$gesamtMitMwst = $gesamtOhneMwst * (1 + $mwst); // Benenne eine passende Variable links vom Gleichheitszeichen und programmiere die Berechnung der Gesamtsumme inkl Mehrwertsteuer.
		
		echo ($gesamtOhneMwst); //  Ausgabe
		echo "<br>"; // Ausgabe eines HTML-Elements für den Zeilenumbruch
		
		// Du bist wieder an der Reihe!
		echo ($gesamtMitMwst); // Gebe das Ergebnis für den Gesamtpreis inkl. MwSt hier aus. Verwende den Variablennamen, den du dafür vergeben hast.
	?>
</body>
</html>