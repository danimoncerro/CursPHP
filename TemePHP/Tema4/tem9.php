<?php

$note = [
	0 => [2,3,5,7],
	1 => [4,5,7,9,8],
	2 => [9,8,7,6,5]
];


afiseaza_array($note);
function afiseaza_array($my_array){
		for ($i=0; $i<count($my_array); $i++){
		echo "Index $i <br> " ;
		for ($j=0; $j<count($my_array[$i]); $j++) {
			echo $my_array[$i][$j] . "<br>";
		}
	echo "<hr>";
	}

}


	

