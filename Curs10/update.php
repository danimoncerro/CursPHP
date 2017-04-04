<?php

require_once 'connect.php';

$sql = "
	UPDATE users 
	  SET password = 'password'
	WHERE id = 11;
";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilziatorul a fost actualizat';
}else {
	echo 'Eroare la actualizare';
}