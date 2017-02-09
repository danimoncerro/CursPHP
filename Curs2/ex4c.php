<?php 

$varsta = 24; // variabila globala
$varsta_pensionare = 65;

// numele functiei poate sa contine litere , _ , cifre .... 
function calculeaza() {
	global $varsta, $varsta_pensionare; // variabila globala se poate folosi in interiorul functiei

	$nr_ani = $varsta_pensionare - $varsta;

	return $nr_ani; // variabile local
    } 
$mesaj = "<h3> Mai ai " . calculeaza() . " ani pana la pensie</h3>";

echo strtoupper($mesaj);


