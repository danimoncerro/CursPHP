<?php

$note = [2,4,3,1,7,6,9,8,10,5];
$nr_elemente = count($note);

function ultimele($nr) {
	global $note, $nr_elemente;

	$output = '';

	for ($i=$nr_elemente-$nr; $i<$nr_elemente; $i++) {
		// $output = $output . $note[$i].", ";
		$output .= $note[$i].", ";
		// echo "$output<br>";
	}
   return $output;
}


echo "Returneaza ultimele 3 elemente: <br>";
echo ultimele(3);

// $output = 8, 
// $output = 8, 10,
// $output = 8, 10, 5,
