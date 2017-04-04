<?php

function calcul(){
	return "Aceasta functie returneaza ceva.";
}
echo "<h3>".calcul()."</h3>";

$mesaj = "<h1>".calcul()."</h1>";

echo strtoupper($mesaj);