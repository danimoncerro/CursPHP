<?php

include_once 'conectare.php';

$sql = "SELECT * FROM users  
        WHERE username = 'cristocea';";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilizatorul a fost inserat.<br>';
} else {
	echo 'Eroare la inserare utilizator.<br>';
}

$result1 = mysqli_fetch_assoc($result);
echo $result1['username'];
