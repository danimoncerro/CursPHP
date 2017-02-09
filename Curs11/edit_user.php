<?php

require_once 'function.php';

if (isset($_POST['submit'])) {

	$id = $_GET['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];

	$sql = "
	UPDATE users 
       SET username = '$username', 
           email = '$email'
	WHERE id = $id;
	";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		// echo "Utilizatorul cu id-ul: $id a fost modificat";
		$_SESSION['msg'] = "Utilizatorul <b>$username</b> a fost modificat";
		header('Location: start.php');
		exit;
	} else {
		echo "Eroare la modificare cu id = $id";
	}

}