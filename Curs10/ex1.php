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

// Step2. Scriem sql query 
$sql = "SELECT * FROM users";

// Step3. Executam sql query si salvam rezultate in $result. 
$result = mysqli_query($conn, $sql);

$nr_result = mysqli_num_rows($result);

echo "Am gasit $nr_result rezultate pentru queryul: " . $sql;