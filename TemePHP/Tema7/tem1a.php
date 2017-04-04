<?php

setcookie('culoarea', 'verde', time() + 30);

if(isset($_COOKIE['culoarea'])){
	echo ;
} else {
	echo "Refresh la pagina";
}