<?php

require_once 'classes/User.php';

// citim parametrul 'id' din url cu get
$id = $_GET['id'];

$utilizator = new User();
$result = $utilizator->findOneById($id);

// construim formularul de editare
// afisam datele din baza de date in formularul de editare

?>

<form action="tema5_update_utilizatori.php?id=<?php echo $id;  ?>" method="post">

	Username: <input type="text" name="username" value="<?php echo $result["username"];  ?>" required>
	<br>
	Password: <input type="password" name="password" value="<?php echo $result["password"];  ?>" required>
	<br>
	Email: <input type="email" name="email" value="<?php echo $result["email"];  ?>" required> 
	<br>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>