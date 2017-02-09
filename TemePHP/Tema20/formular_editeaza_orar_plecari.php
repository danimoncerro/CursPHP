<?php

	session_start();


// includem fisierul de conectare la baza de date

include 'connect.php';

// citim parametrul 'id'din url cu get
$id = $_GET['id'];

// construim sql-ul

$sql = "SELECT * FROM zboruri_plecari
		WHERE id = $id";


// pregatim sql-ul

$stmt = $conn->prepare($sql);

// rulam sql-ul

$stmt->execute();

// citim datele

$zbor = $stmt->fetch();


// construim formularul de editare
// afisam datele din baza de date in formularul de editare

?>



<form action="update_zbor.php?id=<?php echo $id;  ?>" method="post">

	Ora: <input type="text" name="ora" value="<?php echo $zbor["ora"];  ?>" required>
	<br>
	Destinatia: <input type="text" name="destinatia" value="<?php echo $zbor["destinatia"];  ?>" required>
	<br>
	Compania: <input type="text" name="compania" value="<?php echo $zbor["compania"];  ?>" required> 
	<br>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>