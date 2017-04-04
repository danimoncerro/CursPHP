<?php

// Exemplu cookie 

// 1. Setare cookie $_COOKIE['limba']
setcookie('limba', 'ro', time() + 3600 * 24 * 365);

// !!!!! Atentie: Cookiul se seteaza dupa executarea fisierului php 
if (isset($_COOKIE['limba'])) {
	echo "Limba selectata: " . $_COOKIE['limba'];
}else {
	echo "Refresh la pagina ";
}

