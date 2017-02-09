<?php

session_start();

if(!isset($_SESSION['contor'])) {
	$_SESSION['contor'] = 1;
	echo "Ati accesat pagina de  1 ori.";
} else {
	$_SESSION['contor']++;
	echo "Ati accesat pagina de " . $_SESSION['contor'] . " ori.";
}
