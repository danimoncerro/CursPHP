<?php

// Definire array asociativ
// indecsi de tip string 
$users = [
	'username' => 'daniel',
	'email' => 'daniel@daniel.ro',
	'oras' => 'Timisoara',
];

// Afisam toate valorile cu indecsi

foreach ($users as $k=>$v) {
	echo "<b>" . ucfirst($k) ."</b>"; //transformam prima litera in majuscule
	echo ":<br>";
	echo $v . "<br><br>";
}