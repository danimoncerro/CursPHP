<?php

// includem fisierul care contine clasa Database

include 'classes/Database.php';

// cream un obiect nou

$fruct = new Database();

// cream o variabila in care vom salva rezultatele returnate de metoda selectDatabase();

$fructe = $fruct->selectDatabase();

// Afisam $products cu dublu foreach 
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nume</th>";
echo "<th>Gust</th>";
echo "<th>Provenienta</th>";
echo "</tr>";

foreach($fructe as $k=>$mar){ //parcugem arrayul pe linie
	echo "<tr>";

	echo "<td> " . $mar["id"] . "</td>";
	echo "<td> " . $mar["nume"] . "</td>";
	echo "<td> " . $mar["gust"] . "</td>";
	echo "<td> " . $mar["provenienta"] . "</td>";
	
	echo "</tr>";
}

echo "</table>";

