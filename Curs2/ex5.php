<?php

$pret = 100;
$tva = 1.2;
function calculeaza_tva() {
	global $pret, $tva;
	return $pret * $tva;
}

echo calculeaza_tva();
