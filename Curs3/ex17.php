<?php 

$nr = [3,7,5,4,8,7,6,5];


function nr_impare($nr) {
	for ($i = 0; $i< count($nr); $i++) {
		if ($nr[$i] % 2 == 1) {
			echo $nr[$i] . " este impar <br>";
		}
	}
}


function nr_pare($nr) {
	for ($i = 0; $i< count($nr); $i++) {
		if ($nr[$i] % 2 == 0) {
			echo $nr[$i] . " este par <br>";
		}
	}
}

nr_impare($nr);
echo '<hr>';
nr_pare($nr);