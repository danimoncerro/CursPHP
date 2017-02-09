<?php

$ingrediente = [
	0 => ["carne", "cartofi"],
	1 => ["orez", "morcov", "ketchup"],
	2 => ["ciuperci", "orez", "morcov", "ketchup"],
];


for ($i=0; $i<count($ingrediente); $i++) {
	echo "<h3>Reteta $i: " . count($ingrediente[$i]). " ingrediente</h3>";

	echo "<ul>";
	for ($j=0;$j<count($ingrediente[$i]); $j++) {
		echo "<li>" . $ingrediente[$i][$j] . "</li>";
	}
	echo "</ul>";
}