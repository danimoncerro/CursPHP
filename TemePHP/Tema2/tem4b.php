<?php

$venit = 1500;
function calcul(){
	global $venit;
	return $venit;
}
$mesaj = "<h1>".calcul()."</h1>";

echo strtoupper($mesaj);