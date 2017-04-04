<?php


// 4 parametrii pentru conectare 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'curs';

// Step.1. Cream conexiune la DB
$conn = mysqli_connect($host, $username, $password, $database);  

// Verificam conexiunea la DB 
if (!$conn) {
	die('Eroare la conectare DB ' . mysqli_connect_error());
}else {
	// echo "Suntem conectati la DB";
}