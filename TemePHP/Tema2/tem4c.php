<?php

$venit = 1500;
$cheltuieli = 1000;


function calcul(){
	global $venit, $cheltuieli;
	return $venit-$cheltuieli;
}
$mesaj = "<h1>Profit = ".calcul()."</h1>";

echo strtoupper($mesaj);