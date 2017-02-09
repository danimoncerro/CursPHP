<?php

require_once 'conectare.php';

if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "
	UPDATE users 
	  SET username = '$username', email = '$email', password = '$password'
	WHERE id = $id;
	";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Utilizatorul cu id-ul: $id a fost modificat";
} else {
	echo "Eroare la modificare cu id = $id";
}

}
?>


<form action="" method="post">
<p>Introduceti id-ul utilizatorului pentru care doriti sa faceti modificari:</p>
<input type="text" placeholder="Introdu id" name="id" required><br>
<p>Introduceti modificarile pe care dorit sa le faceti:</p>
<input type="text" placeholder="Introdu username" name="username" required>
<input type="text" placeholder="Introdu email" name="email" required>
<input type="password" placeholder="Introdu pass" name="password" required>


<input type="submit" name="submit" value="UPDATE">


</form>