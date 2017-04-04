<?php

session_start();
if(!isset($_SESSION['views'])){
	$_SESSION['views'] = 1;
	echo "Avem 1 vizualizari.";
} else {
	$_SESSION['views']++;
	echo "Avem " . $_SESSION['views'] . " vizualizari";
}
