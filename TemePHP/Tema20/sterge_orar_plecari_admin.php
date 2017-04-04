<?php

// Include fisierul de conexiune la baza de date

include 'connect.php';

// definim o variabila id careia ii atribuim valoare id in url

$id = $_GET["id"];

// Construim sql-ul

$sql = "DELETE FROM zboruri_plecari
		WHERE id=$id";

// Pregatim sql-ul

$stmt = $conn->prepare($sql);

// Executam sql-ul
if($stmt->execute()) {
	echo "<p> Stergerea s-a facut cu succes! </p>";
} else {
	echo "S-a produs o eroare la operatiunea de stergere.";
};



// Creem o legatura catre fisierul masini.php
?>

<br><br>
<a href="orar_plecari_admin.php">Vizualizare zboruri</a>

</body>
</html>

