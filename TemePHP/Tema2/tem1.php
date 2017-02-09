<?php

$a = 5;
$b = &$a;
$c = &$b;


echo "$b <br>";

$b = 10;
 
echo $b;
echo "<br>";
echo $a;
echo "<hr>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br> $c";

