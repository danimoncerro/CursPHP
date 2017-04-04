<?php

$server='localhost';
$username='root';
$password='';
$database='tema28';

try {
	// Realizam conexiunea 
	$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
	// echo "Conexiune reusita";
}
catch (PDOException $e) {
	echo "Conexiune esuata: " . $e->getMessage();
}

