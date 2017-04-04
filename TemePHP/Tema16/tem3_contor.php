<?php

if(!isset($_COOKIE['culoare'])){
	$contor = $_GET['cul'];
	setcookie('culoare', $contor, time()+3600);
	echo "Avem culoarea $contor.";
} else {
	$contor = $_COOKIE['culoare'];
	setcookie('culoare', $contor, time()+3600);
	echo "Avem culoarea $contor.";
}
