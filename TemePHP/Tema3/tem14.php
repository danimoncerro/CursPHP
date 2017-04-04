<?php

//$x = 7;

function verifica($x) {
	if ($x % 2 == 0) {
		echo "$x este par";
	}
	else {
		echo "$x este impar";
	}
}

for ($i=0; $i<100; $i++){
	verifica($i);
	echo "<br>";
}

