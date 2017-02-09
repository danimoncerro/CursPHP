<?php

$note = [
	0 => [2,3,5,7],
	1 => [4,5,7,9,8],
	2 => [9,8,7,6,5]
];



for ($i=0; $i<count($note); $i++){
	echo "<ul>";
	echo "Index $i: ";
	for ($j=0; $j<count($note[$i]); $j++) {
		echo "<li>";
		echo $note[$i][$j] ; //"<br>";
		echo "</li>";
	}
	echo "</ul>";
}




	

