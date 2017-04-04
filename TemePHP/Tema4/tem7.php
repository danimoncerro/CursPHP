<?php

$note = [
	0 => [2,3,5,7],
	1 => [4,5,7,9,8]
];

for ($i=0; $i<count($note); $i++){
	$a=$i+1;
	echo "elev $a <br>";
	for ($j=0; $j<count($note[$i]); $j++){
		echo $note[$i][$j]."<br>";
	}
	echo "<hr>";
}
