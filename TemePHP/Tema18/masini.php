<?php 

	session_start();

	// includem fisierele cu conexiunile la bazele de date;
	include 'functions.php';
	include 'connect.php';
	include 'connect_users.php';

	// Citim datele utilizatorului logat din sesiune
	$user = $_SESSION['user'];

	// Daca nu este logat atunci redirect catre form login 
	check_access();

	// Temporar un test
	// if (isset($_SESSION['logat'])) {
	// 	echo 'utilizatorul este logat';
	// } else {
	// 	echo 'utilizatorul nu este logat';
	// }

?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php


// definim sql-ul

$sql = 'SELECT * FROM cars
		ORDER BY id ASC';

// pregatim sql-ul

$stmt = $conn->prepare($sql);

// executam sql-ul

$stmt->execute();

// citim rezultatele

$auto = $stmt->fetchAll();


//echo $id2['username'];
echo "Utilizator: " . $user['username'];
echo "<br>";
echo "<a href='my_profile.php?id=".$user['id']."'>Profil utilizator</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";

?>



<!-- Adaugam un titlu tabelei -->

<h2> PIATA AUTO </h2>



<?php

// afisam rezultatele

// creem un tabel

echo "<table>";

// linie noua

echo "<tr>";

// cap de tabel
echo "<th>Id</th>";
echo "<th>Brand</th>";
echo "<th>Model</th>";
echo "<th>Culoare</th>";
echo "<th>Inmatriculat</th>";
echo "<th>Pret</th>";
echo "<th>Actiuni</th>";
echo "</tr>";


foreach ($auto as $k=>$masina) {
	$id = $masina["id"];

	echo "<tr>";

	echo "<td>" . $masina['id'] . "</td>";
	echo "<td>" . $masina['brand'] . "</td>";
	echo "<td>" . $masina['model'] . "</td>";
	echo "<td>" . $masina['culoare'] . "</td>";
	echo "<td>" . $masina['inmatriculat'] . "</td>";
	echo "<td>" . $masina['pret'] . "</td>";
	echo "<td> 
			<a href='formular_editeaza.php?id=" . $id . "'>Editeaza</a> |   
			<a href='sterge.php?id=" . $id . "'>Sterge</a>
		  </td>";
	
	echo "</tr>";

}

echo "</table>";


?>

<!--Adaugam butonul adauga un nou element in tabel
 -->
<div class="center">
 <a id="a1" href="formular_inserare.html">Adauga masina</a>
</div>

</body>
</html>
