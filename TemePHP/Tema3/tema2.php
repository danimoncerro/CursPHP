<?php

$zile = ['luni', 'marti', 'miercuri', 'joi', 'vineri', 'sambata', 'duminica'];

for ($i = 0; $i < count($zile); $i++) {
	if ($zile[$i] == 'joi') {
		echo $zile[$i]. " avem sedinta PHP <br>"; 
	} else {
		echo $zile[$i] . " nu avem sedinta PHP <br>";
	}
}



