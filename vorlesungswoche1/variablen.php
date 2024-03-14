<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arbeiten mit Variablen</title>
</head>

<body>
	<?php
		/*
			Regeln für Variablen:
			- Variablen dürfen keine Leerzeichen enthalten
			- Es dürfen nur Buchstaben und Ziffern verwendet werden
			- Das erste Zeichen muss ein Buchstabe sein
			- Es dürfen keine Umlaute verwendet werden
			- Unterstrich ist erlaubt
		*/
	$liter = 14;
	$preis = 1.35;
	$gesamtpreis = $preis * $liter;
	echo $gesamtpreis;
	
	?>
</body>
</html>