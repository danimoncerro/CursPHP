<?php

$nr = [3, 5, 78, 34, 12, 34, 45, 56];

// Afiseaza toate numerele pare 
// $nr = 4;
// if ($nr % 2 == 0 )-> nr este par
// if ($nr % 2 == 1) -> nr este impar 

for ($i=0; $i<count($nr); $i++){
	if($nr[$i] % 2 == 1) {
		echo $nr[$i] . "<br>";
	}
}
