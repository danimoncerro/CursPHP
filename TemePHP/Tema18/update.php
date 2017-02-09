<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

// Includem fisierul de conexiune la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$culoare = $_POST['culoare'];
	$inmatriculat = $_POST['inmatriculat'];
	$pret = $_POST['pret'];

// Construire sql

$sql = "UPDATE cars
		SET brand = '$brand',
			model = '$model',
			culoare = '$culoare',
			inmatriculat = $inmatriculat,
			pret = $pret
		WHERE id = $id";

// Pregatim sql-ul

$stmt = $conn->prepare($sql);	

// Executare sql

if ($stmt->execute()){

	echo "<p> Modificarea a avut loc cu succes. </p>";
} else {
	echo "A aparut o eroare.";
}
// Adaugare link pentru vizualizare masini

}

?>

<br>
<a href="masini.php">Vizualizare masini</a>

</body>
</html>