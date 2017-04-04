<?php

include 'connect.php';

if(isset($_POST['submit'])){
	$ora = $_POST['ora_decolarii'];
	$destinatia = $_POST['destinatia'];
	$compania = $_POST['compania'];

	$sql = "INSERT INTO plecari (ora, destinatia, compania)
			VALUES ('$ora', '$destinatia', '$compania')";

	$conn->exec($sql);
	echo "Am inserat o noua cursa.";
} else {
	echo "Acces interzis";
}

?>

<hr><br>
<a href = "curse.php">Afiseaza cursele aeriene</a>
