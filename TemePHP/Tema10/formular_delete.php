<?php

require_once 'conectare.php';

if (isset($_GET['submit'])) {

	$id = $_GET['id'];

	$sql = "
		DELETE FROM users 
		WHERE id = $id
	";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Utilizatorul cu idul: $id a fost sters.";
} else {
	echo "Eroare la stergere utilizator cu id = $id";
}

}
?>


<form action="" method="get">

<p>Introduceti id-ul utilizatorului pe care dorit sa-l stergeti:</p>
<input type="text" placeholder="Introdu id" name="id" required>


<input type="submit" name="submit" value="DELETE">


</form>