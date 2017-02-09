<?php

require_once 'conectare.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "
	INSERT INTO users (username, email, password)
	VALUES ('$username', '$email', '$password');
";
$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilizatorul a fost inserat';
} else {
	echo 'Eroare la inserare utilizator';
}

}




?>


<form action="" method="post">

<p>Introduceti datele pentru un utilizator nou:</p>

<input type="text" placeholder="Introdu username" name="username" required>

<input type="text" placeholder="Introdu adresa de email" name="email" required>

<input type="password" placeholder="Introdu parola" name="password" required>

<input type="submit" name="submit" value="INSERT">


</form>