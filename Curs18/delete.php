<?php

include 'connect.php';

//citim datele

$id = $_GET["id"];

//pregatim sql

$sql = "DELETE FROM products 
		WHERE id=$id";

$stmt = $conn->prepare($sql);

//executam sql

if ($stmt->execute()) {
	//afisam un mesaj
	echo "Stergerea s-a facut cu succes.";

} else {
	//afisam un mesaj
	echo "Eroare stergere. Produsul nu exista";

}




?>

<hr>

<a href="products.php">Vizualizare produse</a>