<?php 

$note = [
	'elev1' => [7,6,5,9],
	'elev2' => [6,9,8],
];

foreach ($note as $i => $elev) {
	echo $i."<br>";
	foreach ($elev as $nota) {
		echo $nota. "<br>";
	}
	echo "<hr>";
}
