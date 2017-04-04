<?php

$nr = 10;
$nr--; // scade cu 1 => $nr = 9
echo '$nr-- : ' . $nr . "<br>";

$nr++; // creste cu 1 => $nr = 10;
echo '$nr++ : ' . $nr . "<br>";

$nr += 1; // $nr = $nr + 1 => $nr = 11;
echo '$nr+=1 : ' . $nr . "<br>";

$nr += 10; // $nr = $nr + 10 => $nr = 21;
echo '$nr+=10 : ' . $nr . "<br>";

$nr *= 2; // $nr = $nr * 2 => 42;
echo '$nr*=2 : ' . $nr . "<br>";

$nr -=40; // $nr = $nr - 40 => 2
echo '$nr-=40 : ' . $nr . "<br>";
