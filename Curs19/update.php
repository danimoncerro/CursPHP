<?php

// includem fisierul de conexiune la baza de date

include 'connect.php';


// verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){


// initializam parametrii care vor fi utilizati pentru schimbarea valorilor in baza de date

	$id = $_GET['id'];

	$email = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];

}

// construim sql-ul

$sql = "UPDATE users
		SET email='$email',
			password='$password',
			fullname='$fullname'
		WHERE id=$id";

// rulam sql-ul

$conn->exec($sql);
echo "Editarea s-a finalizat cu succes.";
header("Location: logout.php");
// link catre login.php

