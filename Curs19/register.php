<?php

include 'connect.php';
session_start();

// Citim datele din formular si le validam

if(isset($_POST['submit'])) {
	// Presupunem ca formularul este valid 
	$isValid = 1;
	$_SESSION['message'] = "";

	// $email = $_POST['email']; -> old style
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	//                    method="post"        value must be email 
	//var_dump($email);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	$fullname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);

	// Validari 
	if (!$email ) { // $email == false
		// Creeaza mesajul de eroare in sesiune 
		$_SESSION['message'] .= "Adresa de email nu este valida<br>";
		// Marcheaza formular ca si invalid
		$isValid = 0;
	}

	if(strlen($password)<6) {
		$_SESSION['message'] .= "Parola trebuie sa aiba minim 6 caractere.<br>";
		$isValid = 0;
	}

	if(strlen($fullname)<6){
		$_SESSION['message'] .= " Fullname trebuie sa contina minim 6 caractere.<br>";
		$isValid = 0;
	}
	
	// Construim sql-ul

	$sql = "INSERT INTO users(email, password, fullname, status)
			VALUES('$email', '$password', '$fullname', 0)";
	
	// Rulam sql-ul

	$conn->exec($sql);

	// Redirectionam in functie de validitate 
	
	if ($isValid) {
		header("Location: thank-you.php");
		exit;
	} else {
		// Salvam valorile actuale in SESSION
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['fullname'] = $fullname;


		// Redirect catre form_register.php
		header("Location: form_register.php");
		exit;
	}
	
}