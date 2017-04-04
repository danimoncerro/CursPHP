<?php

$venit = 2000;

function calcul(){
	global $venit;
	$venit = $venit + 1000;
		
}
calcul();
echo $venit;

calcul();
echo "<br> $venit </br>";