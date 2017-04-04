<?php

require_once 'classes/User.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$utilizator = new User();

	$utilizator->setUsername($username);
	$utilizator->setPassword($password);
	$utilizator->setEmail($email);
	$utilizator->setId($id);

	$utilizator->update();
	

// Adaugare link pentru vizualizare orar plecari

}

?>

<br>
<a href="tema4_orar_plecari_admin.php">Vizualizare orar plecari</a>

</body>
</html>