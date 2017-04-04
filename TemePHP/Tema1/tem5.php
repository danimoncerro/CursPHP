<?php

$numar = 3;
$nota = 8.5;
$animal = "vulpe";
$chestionar = true;
$grupe = ["frunze", "crengi", "trunchiuri", "radacini"];
$cladiri = new stdClass();

$test=gettype($numar);
echo $test;

$test1=gettype($nota);
echo "<br>".$test1;

$test2=gettype($animal);
echo "<br>".$test2;

$test3=gettype($chestionar);
echo "<br>".$test3;

$test4=gettype($grupe);
echo "<br>".$test4;

$test5=gettype($cladiri);
echo "<br>".$test5;



