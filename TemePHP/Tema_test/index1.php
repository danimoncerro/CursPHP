<?php

include 'connect.php';
include 'function.php';

// construire sql

$sql = "SELECT * FROM products";

/*

// pregatire sql

$stmt = $conn->prepare($sql);

// rulare sql

$stmt->execute();

// citire rezultate

$result = $stmt->fetchAll();

*/
 $result = get_produse($sql);

// afisare rezultate

foreach ($result as $k=>$produs) {
	echo $produs['soi'] . "<br>";
}