<?php

	session_start();


// includem fisierul de conectare la baza de date

include 'connect.php';

// citim parametrul 'id'din url cu get
$id = $_GET['id'];

// construim sql-ul

$sql = "SELECT * FROM users
		WHERE id = $id";


// pregatim sql-ul

$stmt = $conn->prepare($sql);

// rulam sql-ul

$stmt->execute();

// citim datele

$utilizator = $stmt->fetch();


// construim formularul de editare
// afisam datele din baza de date in formularul de editare

?>



<form action="update.php?id=<?php echo $id;  ?>" method="post">

	Username: <input type="text" name="username" value="<?php echo $utilizator["username"];  ?>" required>
	<br>
	Password: <input type="password" name="password" value="<?php echo $utilizator["password"];  ?>" required>
	<br>
	Email: <input type="email" name="email" value="<?php echo $utilizator["email"];  ?>" required> 
	<br>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>