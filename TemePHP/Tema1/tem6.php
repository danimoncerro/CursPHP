<?php

$numar = 3;
$nota = 8.5;
$animal = "vulpe";
$chestionar = true;
$grupe = ["frunze", "crengi", "trunchiuri", "radacini"];
$cladiri = new stdClass();

$test=gettype($numar);
echo $test;
echo "<br>";
echo var_dump($numar);
echo "<hr>";

$test1=gettype($nota);
echo $test1;
echo "<br>";
echo var_dump($nota);
echo "<hr>";

$test2=gettype($animal);
echo $test2;
echo "<br>";
echo var_dump($animal);
echo "<hr>";

$test3=gettype($chestionar);
echo $test3;
echo "<br>";
echo var_dump($chestionar);
echo "<hr>";

$test4=gettype($grupe);
echo $test4;
echo "<br>";
echo var_dump($grupe);
echo "<hr>";

$test5=gettype($cladiri);
echo $test5;
echo "<br>";
var_dump($cladiri);
echo "<hr>";



