<?php

$a = 11;
$b = "11";

echo '<h3> Se verifica: $a == $b </h3>';
if ($a==$b) {
	echo " $a = $b ";
} else {
	echo 'Variabila $a este diferita de variabila $b';
}

echo '<h3> Se verifica: $a === $b </h3>';
if ($a===$b) {
	echo " $a = $b ";
} else {
	echo 'Variabila $a este diferita de variabila $b';
}

