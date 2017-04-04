<?php

include 'connect.php';

//citire id din POST

if (isset($_POST['submit'])) {
	$id = $_POST['param_id'];
	$name = $_POST['localitate'];
	$id_judet = $_POST['judet'];

	// construire sql

	$sql = "UPDATE localitate
			SET name = '$name',
		    	id_judet = '$id_judet'
			WHERE id = $id ";

	// preparare sql

	$stmt = $conn->prepare($sql);

	// executare sql
	$response = $stmt->execute();

	if (!$response){
		echo "Eroare sql: " . $sql;
	} else {

	// mesaj de succes

		echo "Modificarea s-a salvat cu succes in baza de date!";

	// link to home page

		echo "<br>";
		echo "<a href='tema_index1.php'>Vizualizare localitati</a>";
	}

} else echo "Eroare.";