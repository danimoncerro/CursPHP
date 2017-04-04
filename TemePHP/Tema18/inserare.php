<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

// Adaugam fisierul cu conexiunea la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul "Adauga"

if(isset($_POST['submit'])){


// Definim variabile pe care le initializam cu valorile introduse de utilizator in formularul de inserare

	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$culoare = $_POST['culoare'];
	$inmatriculat = $_POST['inmatriculat'];
	$pret = $_POST['pret'];

// Formulam sql-ul

$sql = "INSERT INTO cars(brand, model, culoare, inmatriculat, pret)
		VALUES ('$brand', '$model', '$culoare', '$inmatriculat', '$pret')";


// Rulam sql-ul

$conn->exec($sql);

// Adaugam un mesaj care afiseaza ca operatiunea de inserare s-a realizat cu succes

echo " <p> Datele au fost adaugate cu succes.</p>";

} else {
	echo "Acces interzis. Datele se pot adauga doar prin formularul de adaugare date.";
}

?>
<br>
<a href="masini.php">Afiseaza masinile</a>

</body>
</html>