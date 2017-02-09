<?php

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo "Username = $username <br>";
	echo "Password = $password";
}
?>

<form action="" method="post">
<input type="text" placeholder="Introduceti username" name="username" required><br>
<input type="password" placeholder="Introduceti parola" name="password" required><br>
<input type="submit" name="submit" value="Verifica datele">
</form>