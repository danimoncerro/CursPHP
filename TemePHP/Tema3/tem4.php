<?php

$note_1 = [2,4,6,8];
echo $note_1[2];


$note = [];
$note_2[0] = 2;
$note_2[1] = 4;
$note_2[2] = 6;
$note_2[3] = 8;
echo "<br>".$note_2[2];

$note_3 = [];
$note_3[] = 2;
$note_3[] = 4;
$note_3[] = 6;
$note_3[] = 8;
echo "<br>".$note_3[2];

$note_4 = [1,2,3];
$note_4[3] = 4;
$note_4[] = 5;

echo "<br>".$note_4[4];