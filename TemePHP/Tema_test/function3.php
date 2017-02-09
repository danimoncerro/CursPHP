<?php

function get_produse($sql) {
	global $conn;

	// pregatire sql

	$stmt = $conn->prepare($sql);

	// executare sql

	$stmt->execute();

	// citire sql

	return $stmt->fetchAll();
}

function afisare_tabel(){
	echo "<table border=1>";

	foreach ($result as $k=>$produs) {
		echo "<tr>";
			echo "<td>".$produs['tip']."</td>";
			echo "<td>".$produs['soi']."</td>";
			echo "<td>".$produs['pret']."</td>";
		echo "</tr>";
	}

echo "</table>";
}