<?php

$numere = [1,2,3,5,6,4,9,7,8];

function numere_pare() {
	global $numere;

	for ($i=0; $i<count($numere); $i++) {
		if ($numere[$i] % 2 == 0) {
			echo $numere[$i] . " este par <br>";
		}
	}
}

function numere_impare() {
	global $numere;

	for ($i=0; $i<count($numere); $i++) {
		if ($numere[$i] % 2 == 1) {
			echo $numere[$i] . " este impar <br>";
		}
	}
}

numere_pare();
echo "<hr>";
numere_impare();