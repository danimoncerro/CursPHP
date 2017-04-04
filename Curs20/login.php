<?php

session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
	// Presupunem ca formularul este valid 
	$isValid = 1;
	$_SESSION['message'] = "";

	// $email = $_POST['email']; -> old style
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// 2. Validam datele din formular 
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

	// Daca nu este valid redirectam catre form_login.php 
	if ($isValid == 0) {
		header("Location: form_login.php");
		exit;
	}


	// 3. Construim SQL SELECT -> 1 singur record 
	$sql = "SELECT  * FROM users 
			WHERE email = '$email' 
			  AND password = '$password'
			  AND status = 1";


	// 4. Preparam si executam sql-ul	
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch();

    $sql1= "SELECT id FROM users
    		WHERE email = '$email'";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $id1=$stmt1->fetch();
    $id2 = $id1['id'];
    
	// 5. verificam rezultatul 
    // Daca $result este false inseamna ca nu exista utilizatorul si vom redirecta catre form login 
    if (!$result) {
    	$_SESSION['message'] = 'Utilizatorul nu exista sau parola este gresita';
    	$isValid = 0;
    }

	// Daca nu este valid redirectam catre form_login.php 
	if ($isValid == 0) {
		header("Location: form_login.php");
		exit;
	}

	$_SESSION['user'] = $result;

	echo "Felicitari esti logat!";
	echo "<br><br>";
	echo "<a href='my_profile.php?id=$id2'>Profil utilizator</a>";
	echo "<br>";
	echo "<a href='utilizatori.php'>Listeaza utilizatorii</a>";
	echo "<br>";
	echo "<a href='logout.php'>Logout</a>";


}