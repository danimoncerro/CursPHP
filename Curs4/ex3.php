<?php


$linia1 = [1, 2, 3];
$linia2 = [4, 5, 6];

$tabel = [
	$linia1, 
	$linia2
];

echo $linia1[0]; // 1
echo $linia2[2]; // 6

echo $tabel[0][0]; // 1
echo $tabel[1][2]; // 6