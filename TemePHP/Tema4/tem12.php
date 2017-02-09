<?php

$numere = [3,4,6,9, 5];

echo '<pre>';
var_dump($numere);
echo '</pre>';
echo "<h4>Sorteaza crescator dupa valori </h4>";
sort($numere);
echo '<pre>';
var_dump($numere);
echo '</pre>';

echo "<h4>Sorteaza descrescator dupa valori </h4>";
rsort($numere);
echo '<pre>';
var_dump($numere);
echo '</pre>';




	

