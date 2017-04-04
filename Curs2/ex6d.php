<?php

$tva = 1.2;

/** $pret est e un parametur = variabila locala */
function calculeaza_tva($_pret) {
	global $tva; // variabila globala

	$pret_cu_tva = $_pret * $tva;
	return "pret fara tva: <b>$_pret</b>  Pret cu tva: <b>$pret_cu_tva</b>"  ;
}

$pret = 100; // variabila globala
echo calculeaza_tva($pret) . "<br>";
