<?php

include 'connect.php';

// Citim datele din formular 
// toate campurile 
// + id

if(isset($_POST["submit"])){
	$tip = $_POST["tip"];
	$soi = $_POST["soi"];
	$culoare = $_POST["culoare"];
	$pret = $_POST["pret"];
	$id = $_GET["id"];

	// Construim SQL-ul

	$sql = "UPDATE products
			SET tip = '$tip', 
				soi = '$soi',
				culoare = '$culoare',
				pret = $pret 
			WHERE id=$id";



	// Preparam sql-ul

	$stmt = $conn->prepare($sql);


	// Executam sql-ul

	if ($stmt->execute()) {
		// Afisam un mesaj
		echo "S-a actualizat cu succes.";
	} else {
		echo "eroare actualizare produs";
	}




	// Redirectionare sau un link catre products.php

	echo "<a href='products.php'>Acceseaza produsele</a>";


} else {
	echo "Acces interzis!";
	exit;
}
