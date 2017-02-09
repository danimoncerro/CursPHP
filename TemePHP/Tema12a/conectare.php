<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tema';

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
	die('Eroare la conectarea DB' . mysqli_connect_error());
} else {

}

