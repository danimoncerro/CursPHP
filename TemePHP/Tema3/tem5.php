<?php

$note = [2,4,3,1,7,6,9,8,10,5];
$nr_elemente = count($note);

for ($i=0; $i<$nr_elemente; $i++) {
	echo $note[$i].", ";
}

echo "<hr>";

for ($i=0; $i<$nr_elemente; $i++) {
	echo $note[$i]. "<br>";
}


