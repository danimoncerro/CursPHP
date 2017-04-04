<?php

session_start();

// definire parametrii baza de date

$server = "localhost";
$username = "root";
$password = "";
$database = 'magazin';


// realizare conexiune


try {
	$conn = new PDO("mysql:host=$server; dbname=$database", $username, $password);
	//echo "Conexiunea la baza de date s-a realizat cu succes.";

}

catch(PDOException $e) {
	echo "Conexiunea a esuat" . $e->getMessage();

}
