<?php 

$nr = [3,7,5,4,8,7,6,5];

for ($i = 0; $i< count($nr); $i++) {
	if ($nr[$i] % 2 == 1) {
		echo $nr[$i] . " este impar <br>";
	}
}