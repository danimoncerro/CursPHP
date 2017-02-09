<?php

if(!isset($_GET["price"])) {
	echo "Trebuie definita variabila price.";
	exit;
}

//pretul va fi de tip int

$pret = intval($_GET["price"]);

//verificam daca pretul este mai mare decat 0
//daca pretul este mai mic decat 0 oprim executia programului

if ($pret <= 0) {
	echo "Pretul trebuie sa fie un numar intreg mai mare decat 0.";
	exit; 
}

function calculeaza_tva($pret) {
	 $tva = $pret * 0.2;
	 return $tva;	
}

echo "TVA = " . calculeaza_tva($pret);


