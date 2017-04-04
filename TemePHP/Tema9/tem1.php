<?php

session_start();
$_SESSION['logat'] = 1;

$card = ['lactate', 'paine', 'fructe'];
$_SESSION['card'] = $card;

if(isset($_SESSION['logat'])) {
	echo "Utilizatorul este logat.";
}