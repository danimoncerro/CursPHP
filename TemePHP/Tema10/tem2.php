<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'curs';

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
	die('Eroare la conectarea DB' . mysqli_connect_error());
} else {
	echo "Suntem conectati la baza de date! <br>";
}

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

$nr_result = mysqli_num_rows($result);

echo "Am gasit $nr_result rezultate pentru queryul: " . $sql;