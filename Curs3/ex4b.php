<?php


// V1
$note = []; // initializam arrayul
$note[3] = 12;
$note[0] = 3;
$note[1] = 6;
$note[2] = 10;


echo $note[3]."<br>";

// => [3,6,10,12] - 4 elemente

// V2
$note = [];

$note[] = 10;
$note[] = 3; // definire
$note[] = 6;
$note[] = 12;
// => [3,6,10,12] - 4 elemente

echo $note[0];