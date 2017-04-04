<?php

// Includem fisierul de conexiune la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$ora = $_POST['ora'];
	$destinatia = $_POST['destinatia'];
	$compania = $_POST['compania'];
	
// Construire sql

$sql = "UPDATE zboruri_plecari
		SET ora = '$ora',
			destinatia = '$destinatia',
			compania = '$compania'
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
<a href="orar_plecari_admin.php">Vizualizare zboruri</a>

</body>
</html>