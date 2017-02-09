<?php

$varsta = $_GET["age"];

if($varsta < 18) {
	echo "Esti minor.";
} else {
	echo "Esti major.";
}

