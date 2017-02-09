<?php

$elev = [
	'varsta' => 22,
	'numele' => 'Vasile',
	'orasul' => 'Baia Mare'
];

echo '<pre>';
var_dump($elev);
echo '</pre>';

echo "<h4>Sorteaza crescator dupa valori </h4>";
asort($elev);
echo '<pre>';
var_dump($elev);
echo '</pre>';

echo "<h4>Sorteaza descrescator dupa valori </h4>";
arsort($elev);
echo '<pre>';
var_dump($elev);
echo '</pre>';

echo "<h4>Sorteaza crescator dupa indecsi </h4>";
ksort($elev);
echo '<pre>';
var_dump($elev);
echo '</pre>';

echo "<h4>Sorteaza descrescator dupa indecsi </h4>";
krsort($elev);
echo '<pre>';
var_dump($elev);
echo '</pre>';