<?php

$numere = [1,2,3,5,6,4,9,7,8];

for ($i=0; $i<count($numere); $i++){
	if ($numere[$i] % 2 == 1) {
		echo $numere[$i]." este impar <br>";
	}
}