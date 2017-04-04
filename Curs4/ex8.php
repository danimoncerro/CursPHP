<?php 

$note = [
	0 => [7,6,5,9],
	1 => [6,9,8],
];




afiseaza_note($note);





function afiseaza_note($note) {
	for ($i = 0; $i < count($note); $i++) {
		$nr = $i + 1;
		echo "elev $nr<br>";
		afiseaza_array($note[$i]);
		echo "<hr>";
	}	
}

function afiseaza_array($myArray) {
	for ($i = 0; $i < count($myArray); $i++ ) {
		echo $myArray[$i] . "<br>";
	}
}



//echo $note[$i][$j]


/*
foreach ($note as $i => $elev) {
	echo $i."<br>";
	foreach ($elev as $nota) {
		echo $nota. "<br>";
	}
	echo "<hr>";
}*/
