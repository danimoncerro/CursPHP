<?php

$note1 = [1,3,5];
$note2 = [4,3,1];
$tabel = [$note1, $note2];

for ($i=0; $i<count($note1); $i++) {
	echo $note1[$i] . ", ";
}
echo "<br>";

for ($i=0; $i<count($note2); $i++) {
	echo $note2[$i] . ", ";
}

