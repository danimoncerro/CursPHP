<?php

require 'connect.php';

$id = $_GET['id'];

$sql = "
	DELETE FROM users 
	WHERE id = $id
";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Utilizatorul cu idul: $id a fost sters";
} else {
	echo "Eroare la stergere utilizator cu id = $id";
}