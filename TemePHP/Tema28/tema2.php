<?php

include 'classes/Fruct.php';

$fruct = new Fruct();

$fruct->nume = 'mar';
echo $fruct->nume;
echo "<br>";

// codul va genera erori

$fruct->gust = 'dulce';
echo $fruct->gust;
echo "<br>";

$fruct->provenienta = 'Polonia';
echo $fruct->provenienta;
echo "<br>";

