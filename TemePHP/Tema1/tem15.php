<?php

$a = 20;
$b = "20";

echo '$a = ';
var_dump($a);
echo "<br>";

echo '$b = ';
var_dump($b);

echo '<h3>Verificam: $a != $b </h3>';

if($a != $b) {
	echo "$a este diferit de $b";
} else {
	echo 'Variabila $a este egala cu variabila $b';

	}

echo '<h3>Verificam: $a !== $b </h3>';

if($a !== $b) {
	echo "$a este diferit de $b";
} else {
	echo 'Variabila $a este egala cu variabila $b';
}