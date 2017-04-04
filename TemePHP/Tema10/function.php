<?php 

/** Aceasta functie afiseaza datele utilizatorului dupa id **/
/** @param $id - int **/
/** @return HTML OUTPUT **/
function afiseaza_utilizator($id) {
	global $conn;

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