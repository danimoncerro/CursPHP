<?php

$x = $_GET["x"];
$y = $_GET["y"];

function scadere($a, $b) {
	$c = $b - $a;
	return $c;
}

echo scadere($x, $y);

