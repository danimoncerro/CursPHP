<?php

require_once 'classes/Orar.php';

// Verificam daca a fost actionat butonul "Adauga zbor"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare

	$ora = $_POST['ora'];
	$de_la = $_POST['de_la'];
	$compania = $_POST['compania'];
	
	$zbor = new OrarSosiri();
	$zbor->setOraAterizare($ora);
	$zbor->setDeLa($de_la);
	$zbor->setCompania($compania);

	$zbor->save();


// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

	echo " <p> Datele au fost adaugate cu succes.</p>";
	echo "<br> <a href='tema5_orar_sosiri_utilizatori.php'>Afiseaza zboruri</a>";

}