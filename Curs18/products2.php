<?php

// Includem conexiunea la baza de date
include 'connect.php';

// Definim SQL-ul
$sql = 'SELECT * FROM products';

// Pregateste SQL-ul final 
$stmt = $conn->prepare($sql);

// Executam SQL-ul
$stmt->execute();

// Citim rezultatele
// vom avea un array bidimensional . 
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Afisam $products cu dublu foreach 

echo "<table border=2 width=600>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Tip</th>";
echo "<th>Soi</th>";
echo "<th>Culoare</th>";
echo "<th>Pret</th>";
echo "</tr>";

foreach($products as $k=>$product){ //parcugem arrayul pe linie
	echo "<tr>";

	foreach ($product as $m => $valoare) {
		echo "<td>$valoare</td>";
	}

	echo "</tr>";
}

echo "</table>";