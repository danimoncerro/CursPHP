<?php


function calculeaza_tva($pret, $tva = 1.2) {
	return "PreT: $pret, TVA: $tva, Pret cu tva: " . ($pret * $tva);
}

echo calculeaza_tva(10, 1.09) . '<br>';
echo calculeaza_tva(10, 1.2) . '<br>';
echo calculeaza_tva(10, 1.05) . '<br>';
echo calculeaza_tva(10).'<br>';
