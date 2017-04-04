<?php

// Includem fisierul de conexiune la baza de date

include 'connect.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
// Construire sql

$sql = "UPDATE users
		SET username = '$username',
			password = '$password',
			email = '$email'
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
<a href="utilizatori.php">Vizualizare utilizatori</a>

</body>
</html>