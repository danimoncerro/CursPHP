<?php

// Conectare la DB
require_once 'conectare.php';

// S-a trimis formularul
if (isset($_GET['submit'])) {

	$id = $_GET['id']; // citim idul din formular / URL

	// Construim SQL-ul 
 	$sql = "SELECT * FROM users  
            WHERE id = $id
     	    LIMIT 1;
    	    ";

    // Executa query 
	$result = mysqli_query($conn, $sql);

    // Daca s-a executat cu succes
	if ($result) {
		// Citim rezultatul / datele(coloanele) din tabela 
		// numele coloanelor devin indecsi
		$user = mysqli_fetch_assoc($result);

		// Salvam variabile temporare
		$username = $user['username']; // 'username' este numele coloanei
		$email = $user['email'];
		$password = $user['password'];
		
		// Afisam cum dorim 	
?>
	<table border=1>
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $username ?></td>
			<td><?php echo $email ?></td>
			<td><?php echo $password ?></td>
		</tr>
	</table>

<?php
		echo "Utilizatorul cu id-ul: $id a fost afisat.";
	} else {
		echo "Eroare la afisare utilizator cu id = $id";
	}

	}
?>


<form action="" method="get">

<p>Introduceti id-ul utilizatorului pentru care doriti sa se afiseze informatiile</p>
<input type="text" placeholder="Introdu id" name="id" required>


<input type="submit" name="submit" value="AFISARE">


</form>