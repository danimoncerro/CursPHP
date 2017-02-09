<?php 

$a = 10;
$b = "10";

echo '<h3>Verificam: $a == $b</h3>';
if ($a == $b) { // se verifica doar valorile
	echo " $a = $b ";
} else {
	echo ' Variabila $a este diferita de variabila $b ';
}


echo '<h3>Verificam: $a === $b</h3>';
if ($a === $b) { // se verifica atat valorile cat si tipurile
	echo " $a = $b ";
} else {
	echo ' Variabila $a este diferita de variabila $b ';
}
