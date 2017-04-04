<?php


// V1
$note = []; // initializam arrayul
$note[3] = 12;
$note[0] = 3;
$note[1] = 6;
$note[2] = 10;




$note[] = 12;
$note[] = 3;
$note[] = 6;
$note[] = 10;
$note[] = 8;

// => [3, 6, 10, 12, 12, 3, 6, 10, 8] - 9 elemente

echo $note[0];