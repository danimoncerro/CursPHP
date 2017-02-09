<?php 

include 'function.php';

// Mesajul din sesiune 
if (isset($_SESSION['msg'])) {
	// afisam mesajul din sesiune
	echo "<p>" . $_SESSION['msg'] . "</p>";
	// stergem mesajul din sesiune 
	unset($_SESSION['msg']);
}


?>


<form action="login.php" method="post">
	<p>
		<input type="text" name="username" placeholder="Introdu utilizator" required>
	</p>

	<p>
		<input type="password" name="password" placeholder="Introdu parola" required>
	</p>

	<p>
		<input type="submit" name="submit" value="Intra in cont" required>
	</p>
</form>


<p>
	<a href="form_register.php">Creeaza cont</a>
</p>