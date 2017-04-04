<?php

function verifica($a) {
	if ($a % 2 == 0) {
		echo " este par";
	}
	else {
		echo " este impar";
	}
}

for ($i=1; $i<=50; $i++) {
	echo $i;
	verifica($i);
	echo '<br>';
}