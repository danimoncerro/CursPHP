<?php 

// numele functiei poate sa contine litere , _ , cifre .... 
function calculeaza() {
	return 'Aceasta functie calculeaza pretul cu tva';
}

$mesaj = "<h3>" . calculeaza() . "</h3>";

echo strtoupper($mesaj);


