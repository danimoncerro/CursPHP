<?php

$note = [1,3,5,7,2,4,8,9,6];

function returneaza() {
	global $note;
	$string = ' ';
	for ($i=0; $i<4; $i++) {
		$string = $string.$note[$i] . ", ";
	}
	return $string;
}
echo "<h3>" . returneaza() . "</h3>";