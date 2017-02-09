<?php 

$note = [
	0 => [7,6,5,9],
	1 => [6,9,8],
];


for ($i = 0; $i < count($note); $i++) {
	$nr = $i + 1;
	echo "elev $nr<br>";
	for ($j = 0; $j < count($note[$i]); $j++ ) {
		echo $note[$i][$j]."<br>";
	}
	echo "<hr>";
}




//echo $note[$i][$j]


/*
foreach ($note as $i => $elev) {
	echo $i."<br>";
	foreach ($elev as $nota) {
		echo $nota. "<br>";
	}
	echo "<hr>";
}*/
