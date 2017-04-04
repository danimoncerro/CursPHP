<?php 

$varsta = 35; // variabila globala

// numele functiei poate sa contine litere , _ , cifre .... 
function calculeaza() {
	global $varsta; // variabila globala se poate folosi in interiorul functiei

	return $varsta; // variabile globala
    } 
$mesaj = "<h3>" . calculeaza() . "</h3>";

echo strtoupper($mesaj);


