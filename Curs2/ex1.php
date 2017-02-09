<?php

$a = 7;
$b = 10;
$c = &$a; // operatorul de referinta ( pointer )
$a = 3;
$c = 20;

echo $a;
