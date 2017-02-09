<?php

$tabel = [ 
	'fructe'=>[
		'mere'=>2,
		'pere'=>3, 
		'portocale'=>5],
	'legume'=>[
		'morcovi'=>4,
		'telina'=>1,
		'varza'=>11]
 ];

 foreach ($tabel as $i=>$food) {
 	echo "$i <br>";
 	foreach ($food as $k=>$food1) {
 		echo "$k = $food1 <br>";
 	}
 }
