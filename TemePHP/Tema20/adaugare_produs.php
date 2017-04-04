<?php

// include fisierul de conexiune la baza de date;

include 'connect.php';

// verificare daca a fost actionat linkul adauga produs


if(isset($_POST['submit'])){
	$denumire_produs = $_POST['denumire_produs'];
	$data_achizitiei = $_POST['data_achizitiei'];
	$cantitate = $_POST['cantitate'];
	$pret_unitar = $_POST['pret_unitar'];
	$furnizor = $_POST['furnizor'];

// construire sql

$sql = "INSERT INTO stocuri(denumire_produs, data_achizitiei, cantitate, pret_unitar, furnizor)
		VALUES('$denumire_produs', '$data_achizitiei', '$cantitate', '$pret_unitar', '$furnizor')";

// pregatire sql

$stmt = $conn->prepare($sql);

// executare sql

$stmt->execute();

// afisare mesaj de reusita

echo "Datele au fost adaugate cu succes.";

// link catre vizualizare produse

echo "<br><br>";
echo "<a href='stocuri.php'>Vizualizare magazin virtual</a>";

}