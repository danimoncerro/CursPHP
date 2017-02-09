<?php

if(!isset($_COOKIE['views'])){
	setcookie('views', 1, time()+3600);
	echo "Avem 1 vizualizare.";
} else {
	$views = $_COOKIE['views'];
	$views++;
	setcookie('views', $views, time()+3600);
	echo "Avem $views vizualizari.";
}