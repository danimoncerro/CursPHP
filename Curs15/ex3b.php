<?php


//Verificam daca exista parametrii

if(!isset($_GET["numele"])){
	echo "Nu este definit parametrul numele.<br>";
	exit;
} 

if(!isset($_GET["varsta"])){
	echo "Nu este definit parametrul varsta.<br>";
	exit;
}

//Citim parametrii existenti

$nume = $_GET["numele"];
$varsta = $_GET["varsta"];

//Afisam valorile parametrilor

echo "Nume = $nume <br>";
echo "Varsta = $varsta";

//http://localhost/CursPHP/Curs15/ex3.php?numele=Daniel&varsta=18

