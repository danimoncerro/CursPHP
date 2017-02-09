<?php

$note = [3,7,8,9,10];


foreach ($note as $index => $nota){
	echo $index . ': ' .$nota . '<br>';
}

$nr_elemente = count($note);

for($i=0; $i<$nr_elemente; $i++) {
	echo $i ." = ".$note[$i]."<br>";
}


/*
for  ($i=0; $i<count($zile); $i++) {
	echo $zile[$i] . '<br>';
}
*/