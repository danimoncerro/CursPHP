<?php


// definim parametrii bazei de date

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'curs17';

// realizam conexiunea

try {
	$conn = new PDO("mysql:host=$server; dbname=$database", $username, $password);
//	echo "Conexiunea s-a realizat cu succes.";
} 
catch (PDOException $e) {
	echo "Conexiunea a esuat." . $e->getMessage();
}


