<?php

include 'connect.php';

// construire sql

$sql = "SELECT * FROM products";

// pregatire sql

$stmt = $conn->prepare($sql);


// rulare sql

$stmt->execute();

//citim rezultatele

$result = $stmt->fetchAll();


// afisam rezultatele
// cream un tabel

echo "<table border=1>";

//cream capul de tabel

echo "<tr>";

	echo "<th>TIP</th>";
	echo "<th>SOI</th>";
	echo "<th>CULOARE</th>";
	echo "<th>PRET</th>";

echo "</tr>";

foreach ($result as $k=>$produs){
	
	echo "<tr>";
		echo "<td>".$produs['tip']."</td>";
		echo "<td>".$produs['soi']."</td>";
		echo "<td>".$produs['culoare']."</td>";
		echo "<td>".$produs['pret']."</td>";
	echo "</tr>";
	
}


