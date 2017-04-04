<?php

// $_GET - variabila superglobala , array
// $_POST - variabila superglobala, array 


//http://localhost/CursPHP/Curs5/ex1.php?nume=vlad&city=oradea&age=20
// $_GET['nume'], $_GET['city'], $_GET['age']

$a = $_GET['a'];  // citeste paramul din url cu numele a 
$b = $_GET['b']; // citeste paramul din url cu numele b 

if ($a <= $b) {
	echo "$a <= $b";
} else  {
	echo "$a > $b";
}