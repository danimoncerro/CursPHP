<?php

$nr = [7,4,6];
echo '<pre>';var_dump($nr);echo '</pre>';

echo "<h4>Sorteaza crescator dupa valori</h4>";
sort($nr); // Sorteaza crescator dupa valori
echo '<pre>';var_dump($nr);echo '</pre>';

echo "<h4>Sorteaza descrescator dupa valori</h4>";
rsort($nr); // Sorteaza descrescator dupa valori
echo '<pre>';var_dump($nr);echo '</pre>';

