<?php

// Adaugam fisierul cu conexiunea la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul "Adauga zbor"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$valid = 0;

	$user = new User();

	$user->setUsername($username);
	$user->setPassword($password);
	$user->setEmail($email);
	$user->setValid($valid);

	$user->save();



// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

	echo " <p> Contul d-voastra va fi validat in termen de 24 de ore de catre administratorul site-ului. </p>";
	echo "<br> <a href='tema4_orar_plecari.php'>Afiseaza zboruri</a>";

}