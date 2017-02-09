<?php


// verificam daca a fost apasat butonul submit 
if (isset($_GET['submit'])) {

	$username = $_GET['username'];
	$password = $_GET['password'];
	echo "Utilizator = $username <br>";
	echo "Parola = $password <br>";


}

?>


<form action="" method="get">

<input type="text" placeholder="Introdu username" name="username" required>

<input type="password" placeholder="Introdu parola" name="password" required>

<input type="submit" name="submit" value="Verifica varsta">


</form>