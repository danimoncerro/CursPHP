<?php 

$varsta = 35; // variabila globala

// numele functiei poate sa contine litere , _ , cifre .... 
function calculeaza() {
	return $varsta; // variabile locala
}

$mesaj = "<h3>" . calculeaza() . "</h3>";

echo strtoupper($mesaj);


