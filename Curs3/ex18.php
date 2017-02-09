<?php 

$nr = [3,7,5,4,8,7,6,5];
$note = [8,9,6,4,3,8,6,7];


function extrage($nr, $par = 0) {
	if ($par == 0) {
		echo "<h3>Nr pare: </h3>";
	}else {
		echo "<h3>Nr impare: </h3>";
	}
	for ($i = 0; $i< count($nr); $i++) {
		if ($nr[$i] % 2 == $par) {
			echo $nr[$i] . "  <br>";
		}
	}
}


extrage($note, 0); // extrage nr pare
extrage($note, 1); // extrage nr impare