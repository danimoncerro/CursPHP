<?php

$note = [1,3,5,8,9,7,6,2,4];

for ($i=0; $i < count($note); $i++) {
	$nota = $note[$i];
	if ($nota <= 6){
		echo $nota . ", ";
	}
}

/*for ($i=0; $i < count($note); $i++) {
	$a = $note[$i];
	if ($a <= 6){
		echo $note[$i] . ", ";
	}
}*/
