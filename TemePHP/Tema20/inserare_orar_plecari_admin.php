<?php

// Adaugam fisierul cu conexiunea la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul "Adauga zbor"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare

	$ora = $_POST['ora'];
	$destinatia = $_POST['destinatia'];
	$compania = $_POST['compania'];
	
// Formulam sql-ul

$sql = "INSERT INTO zboruri_plecari(ora, destinatia, compania)
		VALUES ('$ora', '$destinatia', '$compania')";


// Rulam sql-ul

$conn->exec($sql);

// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

echo " <p> Datele au fost adaugate cu succes.</p>";
echo "<br> <a href='orar_plecari_admin.php'>Afiseaza zboruri</a>";

}