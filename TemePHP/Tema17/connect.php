<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'tema17';

try {
	$conn = new PDO("mysql:host=$server; dbname=$database", $username, $password);
	//echo "Conexiune reusita.";
}

catch (PDOException $e){ 
	echo "Conexiunea nu a reusit: " . $e->getMessage();

}

