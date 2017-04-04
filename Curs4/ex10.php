<?php

$note = [
	0 => [7,6,5,9],
	1 => [6,9,8],
	2 => [4,7,9, 6,9,8],
];


for ($i=0; $i<count($note); $i++) {
	echo "<ul>";
	echo "<li>index $i</li>";

	for ($j=0;$j<count($note[$i]); $j++) {
		echo "<li>" . $note[$i][$j] . "</li>";
	}
	echo "</ul>";
}