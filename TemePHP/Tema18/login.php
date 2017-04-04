<?php

session_start();
include 'connect_users.php';

// Daca a fost apasat butonul de submit din formular 
// Daca datele vin din formular . 
if (isset($_POST['submit'])) {
	
	$isValid = 1;
	$_SESSION['message'] = "";

	// Citim datele din formular cu minim validare
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// Validare 
	if (!$username ) { 
		
		$_SESSION['message'] .= "Username-ul nu este valid<br>";
	
		$isValid = 0;
	}
	
	if(strlen($password)<6) {
		$_SESSION['message'] .= "Parola trebuie sa aiba minim 6 caractere.<br>";
		$isValid = 0;
	}

	// Dca nu este valid se redirect catre formularul de login 
	if ($isValid == 0) {
		header("Location: formular_login.php");
		exit;
	}


	$sql = "SELECT  * FROM users 
			WHERE username = '$username' 
			  AND password = '$password'";


    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // $result este utilizatorul logat daca userul si parola sunt ok
    $result = $stmt->fetch();

    // Daca nu exista utilizatorul punem statusul invalid si setam un mesaj	
    if (!$result) {
    	$_SESSION['message'] = 'Utilizatorul nu exista sau parola este gresita';
    	$isValid = 0;
    }

	// Daca utilizatorul nu exista redirect catre form login 
	if ($isValid == 0) {
		header("Location: formular_login.php");
		exit;
	}

    // Salvam utilizatorul in sesiune daca exista $result
    $_SESSION['user'] = $result;

    // Salvam in sesiune o variabila care stie ca utilizatorul este logat 
    $_SESSION['logat'] = 1;
	    
	header("Location: masini.php");

}