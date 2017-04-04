<?php

if(isset($_GET['submit'])){
	$username = $_GET['username'];
	$password = $_GET['password'];
	echo "Username = $username <br>";
	echo "Password = $password";
}
?>

<form action="" method="get">
<input type="text" placeholder="Introduceti username" name="username" required><br>
<input type="password" placeholder="Introduceti parola" name="password" required><br>
<input type="submit" name="submit" value="Verifica datele">
</form>