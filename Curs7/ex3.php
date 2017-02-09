<?php 

// Nr vizualizari / pagina 

if (!isset($_COOKIE['counter'])) {
	setcookie('counter', 0, time() + 3600);
} else {
	$counter = $_COOKIE['counter'];
	$counter++; // incrementam cu 1 
	setcookie('counter', $counter, time() + 3600);


	echo "Avem $counter vizualizari";
}




