<?php

if (isset($_GET['submit'])) {
	if (isset($_GET['varsta'])) {
		$varsta = $_GET['varsta'];
		if($varsta < 18) {
			echo "Trebuie sa ai minim 18 ani pentru a putea vizualiza acest site.";
		} else {
			echo "Este ok. Esti major, poti vizualiza acest site.";
		}
	} else {
		echo "Trebuie sa introduceti un parametru cu numele varsta.";
	}
}

?>

<form action="tem4.php" method="get">
<input type="text" placeholder="Introduceti varsta" name="varsta">
<input type="submit" name="submit" value="Verifica varsta">
