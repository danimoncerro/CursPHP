<?php

$note = [
	0 => [2,3,5,7],
	1 => [4,5,7,9,8]
];

for ($i=0; $i<count($note); $i++){
	$a=$i+1;
	echo "elev $a <br>";
	echo afiseaza_array($note[$i]);
	echo "<hr>";
}

function afiseaza_array($my_array){
	global $note;
	for ($i=0; $i<count($my_array); $i++){
		echo $my_array[$i]."<br>";
	}
}


	

