<?php

require_once 'conectare.php';

if (isset($_GET['submit'])) {

	$id = $_GET['id'];
	$username = '';
	$email = '';
	$password = '';

	$sql = "SELECT * FROM users  
    	   WHERE id = $id
    	   LIMIT 1;
    	   ";

echo "$username";
$result = mysqli_query($conn, $sql);

if ($result) {

		echo '<table border=1>';
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id']; // 'id' este numele coloanei
			$username = $row['username']; // 'username' este numele coloanei
			$email = $row['email'];
			$password = $row['password'];

			echo '<tr>';

				echo "<td>$id</td>";
				echo "<td>$username</td>";
				echo "<td>$email</td>";
				echo "<td>$password</td>";

			echo '</tr>';

		}
echo '</table>';
	
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