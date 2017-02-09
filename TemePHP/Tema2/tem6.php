<?php

$venit = 2000;
$cheltuieli = 600;


function calcul_profit($cheltuieli_1){
	global $venit;
	return $venit-$cheltuieli_1;
}
$mesaj = "<h1>Profit = ".calcul_profit($cheltuieli)."</h1>";

echo strtoupper($mesaj);