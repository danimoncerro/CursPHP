<?php 

require_once 'function.php';

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
	// echo 'Utilizatorul a fost inserat';
	$_SESSION['msg'] = 'Utilizatorul a fost inserat';
	header('Location: start.php');
	exit;
} else {
	echo 'Eroare la inserare utilizator';
}

}
