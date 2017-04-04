<?php
require_once 'conectare.php';

$sql = "
	UPDATE users 
	  SET username = 'cristocea1'
	WHERE id = 116;
";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilziatorul a fost actualizat';
}else {
	echo 'Eroare la actualizare';
}