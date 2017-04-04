<?php

$note = [1, 6, 7, 4, 3, 9, 5, 10, 8];

for($i=0; $i<count($note); $i++){
	if($note[$i] % 2 == 0) {
		echo $note[$i] . "<br>";
	}
}

echo "<hr>";

foreach($note as $k=>$v) {
	if($v % 2 == 0) {
		echo $v . "<br>";
	}
}

