<?php


// verificam daca a fost apasat butonul submit 
if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	echo "Utilizator = $username <br>";
	echo "Parola = $password <br>";


}

?>


<form action="" method="post">

<input type="text" placeholder="Introdu username" name="username" required>

<input type="password" placeholder="Introdu parola" name="password" required>

<input type="submit" name="submit" value="Verifica varsta">


</form>