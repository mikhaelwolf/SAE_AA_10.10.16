<?php

	echo $_GET['fjs'];
	echo "<br>\n";
	echo $_GET['sth'];
	echo "<br>\n";
	echo $_GET['ast'];
	echo "<br>\n";
	echo $_GET['jahr'];
	echo "<br>\n";
	
	$file = fopen('daten.csv', 'w+');
	fwrite($file, '"Fläche je Stockwerk in qm";"Stockwerkshöhe in m";"Anzahl Stockwerke";"Jahr"');
	fwrite($file, '"', $_GET['fjs'], '";"', $_GET['sth'], '";"', $_GET['ast'], '";"', $_GET['jahr'], '"');
	fclose($file);
?>