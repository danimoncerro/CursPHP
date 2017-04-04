<?php

$tva = 1.2;

/** $pret est e un parametur = variabila locala */
function calculeaza_tva($pret) {
	global $tva; // variabila globala

	$pret_cu_tva = $pret * $tva;
	return "pret fara tva: <b>$pret</b>  Pret cu tva: <b>$pret_cu_tva</b>"  ;
}

echo calculeaza_tva(100) . "<br>";
echo calculeaza_tva(500) . "<br>";
echo calculeaza_tva(200) . "<br>";
echo calculeaza_tva(400) . "<br>";
echo calculeaza_tva(600) . "<br>";
echo calculeaza_tva(800) . "<br>";
echo calculeaza_tva(1000) . "<br>";

