<?php

include 'connect.php';

// construire sql

$sql = "SELECT * FROM products";


// pregatire sql

$stmt = $conn->prepare($sql);

// executare sql

$stmt->execute();

// citire rezultate

$result = $stmt->fetchAll();

// afisare rezultate

echo "<table border=1>";
foreach($result as $k=>$produs){
	echo "<tr>";

		echo "<td>".$produs['tip']."</td>";
		echo "<td>".$produs['soi']."</td>";
		echo "<td>".$produs['pret']."</td>";

	echo "</tr>";
}

echo "</table>";