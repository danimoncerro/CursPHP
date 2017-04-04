<?php

$note = [8, 6, 7, 9, 10, 7,6];



$nr_elemente = count($note); // nr de elemente 
for ($i = $nr_elemente - 3; $i < $nr_elemente; $i++) {
	echo $note[$i] . ', ';
}
