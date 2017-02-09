<?php

$note = [8, 6, 7, 9, 10, 7,6];


function last_note ($nr) {
	global $note;

	$nr_elemente = count($note); // nr de elemente 
	for ($i = $nr_elemente - $nr; $i < $nr_elemente; $i++) {
		echo $note[$i] . ', ';
	}
}


function first_note($nr) {
	global $note;

	for ($i = 0;$i < $nr; $i ++) {
		echo $note[$i] . ', ';
	}
}

echo "<h3> Ultimele 2 note</h3>";
last_note(2);

echo "<h3> Ultimele 4 note</h3>";
last_note(4);


echo "<h3> First 3 note</h3>";
first_note(3);