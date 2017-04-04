<?php

$note = [
	'elev1' => [2,3,5,7],
	'elev2' => [4,5,7,9,8]
];

foreach ($note as $i=>$elev){
	echo $i."<br>";
	foreach ($elev as $nota){
		echo $nota."<br>";
	}
	echo "<hr>";
}
