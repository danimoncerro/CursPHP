<?php

$x = 20;

// definire functie
function test() {
	global $x;

	$x = $x + 10; // se schimba valoare variabilei globale
}

//apelare functie
test();

echo $x;