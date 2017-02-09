<?php

if (isset($_GET['varsta'])) {
	$varsta = $_GET['varsta'];
	if ($varsta < 18 ) {
		echo "Trebuie sa ai minim 18 ani pentru a putea vizualiza acest site.";
	} else {
		echo "Ok. Esti major deci poti vizualiza acest site.";
	}

} else {
	echo "Trebuie sa introduceti in url un parametru cu numele varsta.";
}

