<?php

$note = [4,5,7,8,9,10]; // varianta noua, de la php 5.4 in sus

echo '$i: $note[$i] <br>';
for ($i=0; $i<count($note); $i++ ) {
	echo $i . ": " . $note[$i] . "<br>";
}
echo "<hr>";

// $k stocheaza indecsi
// $v valorile
echo '$k: $v <br>';
foreach ($note as $k=>$v){
	echo $k .": ". $v . "<br>";
}