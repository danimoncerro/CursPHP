<?php

require_once 'function.php';

if (isset($_POST['submit'])) {

	// setam o variabila, presupunem ca formularul nu este valid. 
	$valid = false; 

	// citim datele din formular. 
	$id = intval($_GET['id']); //transforma in integer
	$title = $_POST['title'];
	$descriere = $_POST['descriere'];
	$price = floatval($_POST['price']); // transforma in float

// var_dump($id, $title, $descriere, $price);
// exit;
	// facem validare
	if ($id > 0 &&
		strlen($title) >= 4 &&
		strlen($descriere) >= 3 &&
		$price > 0) {
		$valid = true;
	}


	// daca nu este valid, setam mesajul de eroare si redirectare catre form_edit_product.php
	if (!$valid) {
		$_SESSION['msg_error'] = ''; // resetam mesajul de eroare
		// Setam mesajele de eroare 
		if (strlen($title) < 4) {
			$_SESSION['msg_error'] .= 'Campul titlu trebuie sa aiba minim 4 caractere.<br>';
		}

		if (strlen($descriere) < 3) {
			$_SESSION['msg_error'] .= 'Campul descriere trebuie sa aiba minim 3 caractere<br>';
		}

		if ($price < 1) {
			$_SESSION['msg_error'] .= 'Pretul trebuie sa fie mai mare deca 0.<br>';
		}



		// Facem redirect 
		header('Location: form_edit_product.php?id=' . $id);
		exit;

	}




	$sql = "
	UPDATE product 
       SET title = '$title',
           descriere = '$descriere',
           price = '$price'
	WHERE id = $id;
	";

	$result = mysqli_query($conn, $sql);

	if ($result) {
	    echo "Produsul cu id-ul: $id a fost modificat";
		$_SESSION['msg'] = "Produsul <b>$title</b> a fost modificat";
		header('Location: start.php');
		exit;
	} else {
		echo "Eroare la modificare cu id = $id";
	}

}