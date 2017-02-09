<?php

$note = [1, 6, 7, 4, 3, 9, 5, 10, 8];

for($i=0; $i<count($note); $i++) {
	echo $note["$i"] . "<br>";
}
echo "<hr>";

foreach($note as $k=>$v) {
	echo $v . "<br>";
}

