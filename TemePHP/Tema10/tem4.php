<?php

include_once 'conectare.php';

$sql = "INSERT INTO users (username, email, password)
		VALUES ('Cristocea', 'cristocea@yahoo.com', '8888');";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilizatorul a fost inserat.';
} else {
	echo 'Eroare la inserare utilizator.';
}
