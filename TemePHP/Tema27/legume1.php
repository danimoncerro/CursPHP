<?php

include 'class_lib1.php';

$radacinoase = new Legume();

$radacinoase->afiseaza_nume();

echo "<br>";
echo "<hr>";

// Nu prea e ok. Nu se foloseste in practica.

echo $radacinoase->nume_leguma;

$radacinoase->nume_leguma = 'patrunjel';

echo "<br>";
echo "<hr>";

$radacinoase->afiseaza_nume();

echo "<br>";
echo "<hr>";




