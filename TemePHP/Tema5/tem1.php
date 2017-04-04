<?php

$x = $_GET['x'];
$y = $_GET['y'];

if ($x < $y) {
	echo "$x < $y";
} elseif ($x == $y){
	echo "$x = $y"; 
} else {
	echo "$x > $y";
}

