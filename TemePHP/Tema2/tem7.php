<?php

$venit = 2000;

function calcul(){
	global $venit;
	$venit = $venit + 1000;
		
}

echo $venit;