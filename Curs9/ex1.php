<?php

// avem nevoie de sesiune 
session_start(); // in fiecare fisier trebuie inclus unde lucram cu sesiune

// salvare date in sesiune 
$_SESSION['logat'] = 1; // de tip scalar: int, float, boolean 

$cart = ['telefon samsung', 'televizor lg'];

$_SESSION['cart'] = $cart; // salvam un array intreg . 


//verificam daca exista o variabila in sesiune
if (isset($_SESSION['logat'])) {
	echo 'utilizatorul este logat';
}
