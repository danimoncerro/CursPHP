<?php

// Include fisierul de conexiune la baza de date

include 'connect.php';

// definim o variabila id careia ii atribuim valoare id in url

$id = $_GET["id"];

// Construim sql-ul

$sql = "DELETE FROM stocuri
		WHERE id=$id";

// Pregatim sql-ul

$stmt = $conn->prepare($sql);

// Executam sql-ul
if($stmt->execute()) {
	echo "<p> Stergerea s-a facut cu succes! </p>";
} else {
	echo "S-a produs o eroare la operatiunea de stergere.";
};


// Creem o legatura catre fisierul stocuri.php
?>

<br><br>
<a href="stocuri.php">Vizualizare magazia virtuala</a>

</body>
</html>
