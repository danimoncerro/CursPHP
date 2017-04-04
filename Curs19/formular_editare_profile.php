<?php



//includem fisierul de conexiune la baza de date

include "connect.php";

//citim id-ul din url

$id = $_GET['id'];

// construim sql-ul

$sql = "SELECT * FROM users
        WHERE id=$id";

// pregatim sql-ul

$stmt = $conn->prepare($sql);

// rulam sql-ul

$stmt->execute();

// afisam rezultatele in formular

$result = $stmt->fetch();

?>

<form action="update.php?id=<?php echo $id; ?>" method="post">

	Email: <input type="email" name="email" value="<?php echo $result["email"];  ?>" required>
	<br>
	Password: <input type="text" name="password" value="<?php echo $result["password"];  ?>" required>
	<br>
	Fullname: <input type="text" name="fullname" value="<?php echo $result["fullname"];  ?>" required> 
	<br>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>

