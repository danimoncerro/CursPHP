<?php

$a = 6;

function verifica($a) {
	if ($a % 2 == 0) {
		echo "nr este par";
	}
	else {
		echo "nr este impar";
	}
}

verifica($a);