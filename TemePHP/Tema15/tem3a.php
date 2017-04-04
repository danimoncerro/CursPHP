<?php

if(!isset($_GET["first_name"])){
	echo "Nu ati introdus numele. <br>";
	exit;
}
if(!isset($_GET["last_name"])){
	echo "Nu ati introdus prenumele. <br>";
	exit;
}
if(!isset($_GET["age"])){
	echo "Nu ati introdus varsta.";
	exit;
}

$numele = $_GET["first_name"];
$prenumele = $_GET["last_name"];
$varsta = $_GET["age"];

echo "$numele " . "$prenumele" . "<br>";

echo "Varsta = " . "$varsta" . "ani.";