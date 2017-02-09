<?php 

$note = [
	0 => [7,6,5,9],
	1 => [6,9,8],
	2 => [4,7,9, 6,9,8],
];





afiseaza_array_bidimensional($note);





function afiseaza_array_bidimensional($myArray) {
	for ($i = 0; $i < count($myArray); $i++) {
		echo "index $i<br>";
		for ($j = 0; $j < count($myArray[$i]); $j++ ) {
			echo $myArray[$i][$j]."<br>";
		}
		echo "<hr>";
	}
}