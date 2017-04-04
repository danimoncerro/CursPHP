<?php

$numere = [1,2,3,5,6,4,9,7,8];
$note = [3,4,5,2,1,7,8];

function extrage($nr, $par = 0) {
	if ($par == 0 ) {
		echo "Numere pare: ";
	} else {
		echo "Numere impare: ";
	}

	for ($i = 0; $i < count($nr); $i++) {
		if ($nr[$i] % 2 == $par) {
			echo $nr[$i] . ", ";
		}
	}
}

extrage($numere, 0);
echo "<br>";
extrage($numere, 1);
echo "<br>";
extrage($note, 0);
echo "<br>";
extrage($note, 1);
