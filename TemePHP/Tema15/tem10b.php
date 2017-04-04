<?php

$fructe = ["mere", "pere", "zmeura", "piersici", "banane"];

for($i=0; $i<count($fructe); $i++) {
	echo "$fructe[$i] <br>";
}

echo "<hr>";

foreach ($fructe as $k=>$v) {
	echo "$v" . "<br>";
}