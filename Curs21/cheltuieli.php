<?php

include 'connect.php';
include 'functions.php';

// Valori implicite
$pret_minim = 0;
$pret_maxim = 100;

// citim pretul din url / formular 
// doar daca exista variabile min in url
if (isset($_GET['min'])) {
	$pret_minim = $_GET['min'];
} 

// doar daca exista variabila max in url
if (isset($_GET['max'])) {
	$pret_maxim = $_GET['max'];
}



// construim sql-ul
$sql = "SELECT * FROM cheltuieli
		WHERE pret >= $pret_minim
		  AND pret <= $pret_maxim
		ORDER BY pret ASC
		";

$result = get_cheltuieli($sql);

$nr_produse = count($result);
echo  "<h1>Am cumparat ".$nr_produse." produse care costa intre " . $pret_minim ." si " . $pret_maxim . " lei </h1>";



// afisare rezultate

echo "<table border=1>";

echo "<tr>";

echo "<th>Nr. crt</th>";
echo "<th>Denumire</th>";
echo "<th>Pretul</th>";

echo "</tr>";

	foreach($result as $k=>$produs){
		echo "<tr>";

			echo "<td>".$produs['id']."</td>";
			echo "<td>".$produs['denumire']."</td>";
			echo "<td>".$produs['pret']."</td>";

		echo "</tr>";

	}
echo "</table>";



// Afisam total valoare. Pentru asta vom folosi SQL 
// construim sql-ul
$sql = "SELECT SUM(pret) AS total FROM cheltuieli
		WHERE pret >= $pret_minim
		  AND pret <= $pret_maxim
		";

$result = get_cheltuieli($sql);


echo "<h3>Total: " . $result[0]['total']. " lei</h3>";


// Afisam cel mai ieftin produs 
$sql = "SELECT MIN(pret) AS minim FROM cheltuieli
		WHERE pret >= $pret_minim
		  AND pret <= $pret_maxim
		";

$result = get_cheltuieli($sql);

echo "<h3>Cel mai ieftin: " . $result[0]['minim'] . " lei </h3>";


// Afisam cel mai scump produs
$sql = "SELECT MAX(pret) AS maxim FROM cheltuieli
		WHERE pret >= $pret_minim
		  AND pret <= $pret_maxim
		";

$result = get_cheltuieli($sql);
echo "<h3>Cel mai scump: " . $result[0]['maxim'] . " lei </h3>";


// Afisam pret mediu pentru produse
$sql = "SELECT AVG(pret) AS mediu FROM cheltuieli
		WHERE pret >= $pret_minim
		  AND pret <= $pret_maxim
		";

$result = get_cheltuieli($sql);
echo "<h3>Pret mediu: " . round($result[0]['mediu']) . " lei </h3>";
