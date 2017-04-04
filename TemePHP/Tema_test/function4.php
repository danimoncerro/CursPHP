<?php

function get_produse($sql){
	global $conn;

	// pregatire sql

	$stmt = $conn->prepare($sql);

	// rulare sql

	$stmt->execute();

	// citire date

	return $stmt->fetchAll();
}

function afiseaza_tabel($result){
	echo "<table border=1>";
		foreach ($result as $k=>$produs){
			echo "<tr>";
				echo "<td>".$produs['tip']."</td>";
				echo "<td>".$produs['soi']."</td>";
				echo "<td>".$produs['pret']."</td>";
			echo "</tr>";
		}
	echo "</table>";
}