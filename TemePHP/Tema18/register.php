<?php

include 'connect_users.php';
session_start();



if(isset($_POST['submit'])) {
	
	$isValid = 1;
	$_SESSION['message'] = "";

	
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);


	if(strlen($username)<6){
		$_SESSION['message'] .= " Username-ul trebuie sa contina minim 6 caractere.<br>";
		$isValid = 0;
	}

	if(strlen($password)<6) {
		$_SESSION['message'] .= "Parola trebuie sa aiba minim 6 caractere.<br>";
		$isValid = 0;
	}

	
	
	// Construim sql-ul

	$sql = "INSERT INTO users(username, password, email)
			VALUES('$username', '$password', '$email')";
	
	// Rulam sql-ul

	$conn->exec($sql);

	// Redirectionam in functie de validitate 
	
	if ($isValid) {
		header("Location: formular_login.php");
		exit;
	} else {
		// Salvam valorile actuale in SESSION
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['email'] = $email;


		// Redirect catre form_register.php
		header("Location: formular_inregistrare.php");
		exit;
	}
	
}