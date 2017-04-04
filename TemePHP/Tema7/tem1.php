<?php

setcookie('varsta', 'major', time() + 3600 * 24 );

if(isset ($_COOKIE['varsta'])) {
	echo "Varsta selectata: " . $_COOKIE['varsta'];

} else {
	echo "Refresh la pagina.";
}
