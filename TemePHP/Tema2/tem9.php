<?php

// Creearea unei functii cu ajutorul careia putem calcula necesarul de ingrasamant pentru o cultura de zmeura
// in functie de suprafata cultivata

$suprafata = 10000;

function calcul_ingrasamant() {
	global $suprafata;
	$kg_ingrasamant = 0.15 * $suprafata;
	return $kg_ingrasamant;
}

$cantitate = calcul_ingrasamant();
echo "<h3> La suprafata de $suprafata mp vom avea nevoie de o cantitate de <i> $cantitate </i> kg ingrasamant. </h3>";