<?php

include 'function.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM utilizatori
			WHERE username = '$username' AND `password` = '$password'";
// var_dump($sql);
// exit;
	$result = mysqli_query($conn, $sql);
// var_dump($result);
// exit;
	if (mysqli_num_rows($result) == 1) {
		// totul in regula, exista un singur utilizator

		$user = mysqli_fetch_assoc($result);

		// citim utilizatorul din db si salvam in sesiune
		$_SESSION['user'] = $user;

		// salvam o variabila in sesiune care retine ca userul este logat 
		$_SESSION['logat'] = 1;

		// redirect 
		header('Location: index1.php');
		exit;

	} else {
		// nu exista utilizato sau parola gresita
		$_SESSION['msg'] = 'Utilizatorul nu exista sau parola este gresita';
		header('Location: index1.php');
		exit;
	}




}

