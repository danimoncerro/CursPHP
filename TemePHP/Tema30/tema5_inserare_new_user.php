<?php

require_once 'classes/User.php';

// Verificam daca a fost actionat butonul "Adauga user"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$utilizator = new User();
	$utilizator->setUsername($username);
	$utilizator->setPassword($password);
	$utilizator->setEmail($email);

	$utilizator->save();

// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

	echo " <p> Contul d-voastra va fi validat in termen de 24 de ore de catre administratorul site-ului. </p>";
	echo "<br> <a href='tema5_orar_sosiri.php'>Afiseaza zboruri</a>";

}