<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'proiect1';

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
	die('Eroare la conectarea DB' . mysqli_connect_error());
} else {
	//echo "Suntem conectati la baza de date! <br>";
}

