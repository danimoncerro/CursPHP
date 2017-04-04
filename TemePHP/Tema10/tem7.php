<?php

require 'conectare.php';


$sql = "
	DELETE FROM users 
	WHERE id = 117;
";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Utilizatorul a fost sters";
} else {
	echo "Eroare la stergere utilizator ";
}