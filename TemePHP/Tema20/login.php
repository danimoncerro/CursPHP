<?php

session_start();

// includem fisierul de conexiune la baza de date

include 'connect.php';

if(isset($_POST['submit'])) {

// Presupunem ca formularul este valid 
	
	$isValid = 1;
	$_SESSION['message'] = "";

	$username = $_POST['username'];
	$password = $_POST['password'];
	

// Construim SQL SELECT -> 1 singur record 

	$sql = "SELECT  id,valid FROM users 
			WHERE username = '$username' 
			  AND password = '$password'";


// Preparam si executam sql-ul	

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    $id = $result['id'];
    $valid = $result['valid'];
   
  // verificam rezultatul 
// Daca $id este false inseamna ca nu exista utilizatorul si vom redirecta catre formular login 

    if (!$id) {
    	$_SESSION['message'] = 'Utilizatorul nu exista sau parola este gresita';
    	$isValid = 0;
    }

// Daca nu este valid redirectam catre formular_login.php 

	if ($isValid == 0) {
		header("Location: formular_login.php");
		exit;
	}
// Daca utilizatorul nu este inca validat redirectam catre orar_plecari.php
	if ($valid == 0) {
		header("Location: orar_plecari.php");
		$_SESSION['message'] = 'Utilizatorul nu este inca validat';
		exit;
	}

	// In acest moment a trecut toate validarile 
	// Setam variabila login in sesiune
	$_SESSION['login'] = 1;

	// Utilizatorul cu $id-ul =  1 este admin 
	if ($id == 1) {
		header("location: orar_plecari_admin.php");
	} else {
		header("location: orar_plecari_utilizatori.php");
	}
}