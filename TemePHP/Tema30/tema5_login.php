<?php

require_once 'classes/User.php';

if(isset($_POST['submit'])) {

// Presupunem ca formularul este valid 
	
	$isValid = 1;

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$utilizator = new User();
	$utilizator->setUsername($username);
	$utilizator->setPassword($password);
	$result = $utilizator->findLogin(); 
    $id = $result['id']; 
    $valid = $result['valid'];  
  // verificam rezultatul 
// Daca $id este false inseamna ca nu exista utilizatorul si vom redirecta catre formular login 
    
    if (!$id) {
    	echo 'Utilizatorul nu exista sau parola este gresita.';
    	echo "<br>";
    	echo "<a href='tema5_formular_login.php'>Login</a>";
    	exit;
    }

// Daca utilizatorul nu este valid redirectam catre tema4_formular_login.php 
// sau catre catre tema4_orar_plecari.php
	if ($valid == 0) {
		echo "Acest utilizator nu a fost inca validat de catre administratorul site-ului.";
		echo "<br>";
		echo "<a href='tema5_formular_login.php'>Login</a>";
		echo "<br>";
		echo "<a href='tema5_orar_sosiri.php'>Orar sosiri</a>";
		exit;
	}

	// In acest moment a trecut toate validarile 
	// Utilizatorul cu $id-ul =  1 este admin 

	if ($id == 1) {
		header("location: tema5_orar_sosiri_admin.php");
	} else {
		header("location: tema5_orar_sosiri_utilizatori.php");
	}
}