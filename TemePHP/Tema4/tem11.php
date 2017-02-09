<?php

$reteta = [
	0 => ['rosii', 'castraveti', 'ardei', 'ulei de masline'],
	1 => ['branza', 'sare', 'smantana'],
	2 => ['lapte', 'oua', 'praf de copt', 'margarina', 'frisca']
];

for ($i=0; $i<count($reteta); $i++){
	echo "<ul>";
	echo "<h3> Reteta $i contine " . count($reteta[$i]) . " ingrediente </h3>";
	for ($j=0; $j<count($reteta[$i]); $j++) {
		echo "<li>";
		echo $reteta[$i][$j] ;
		echo "</li>";
	}
	echo "</ul>";
}




	

