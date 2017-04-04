<?php

setcookie('contorul', 0, time() + 3600 * 24 * 3);
if(isset($_COOKIE['contorul'])) {
	$_contorul = $_COOKIE['contorul'];
	$_contorul++;
	setcookie('contorul', $_contorul, time() + 3600 * 24 * 3);
	echo "Aceasta pagina a fost vizitata de: " . $_contorul . " ori. <br>";
} else {
	echo "Refresh la pagina.";
}