<?php

$fructe = ['mere', 'nuci', 'prune', 'pere', 'cirese', 'zmeura', 'cocos'];

/*foreach ($fructe as $fruct) {
	echo $fruct . "<br>";
}*/

$nr_elemente = count($fructe);

for ($i=0; $i<$nr_elemente; $i++) {
	echo $fructe[$i]."<br>";
}