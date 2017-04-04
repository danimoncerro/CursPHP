<?php

require_once 'classes/Orar.php';

// Verificam daca a fost actionat butonul "Adauga zbor"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare

	$ora = $_POST['ora'];
	$destinatia = $_POST['destinatia'];
	$compania = $_POST['compania'];
	
	$zbor = new OrarPlecari();
	$zbor->setOraDecolare($ora);
	$zbor->setDestinatia($destinatia);
	$zbor->setCompania($compania);

	$zbor->save();


// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

	echo " <p> Datele au fost adaugate cu succes.</p>";
	echo "<br> <a href='tema4_orar_plecari_admin.php'>Afiseaza zboruri</a>";

}