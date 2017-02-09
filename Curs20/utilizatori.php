<?php 

	session_start();

	// includem fisierele cu conexiunile la bazele de date;
	include 'functions.php';
	include 'connect.php';

	// Citim datele utilizatorului logat din sesiune
	$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

//echo $id2['username'];
echo "Bine ai venit, <a href='my_profile.php?id=".$user['id']."'><b>" . $user['fullname'] . "</b></a>!";
echo "<a href='logout.php'>Logout</a>";
echo "<br>";

echo "<br>";

echo "<br><br>";

// definim sql-ul

$sql = 'SELECT * FROM users
		ORDER BY id DESC';

// pregatim sql-ul

$stmt = $conn->prepare($sql);

// executam sql-ul

$stmt->execute();

// citim rezultatele

$users = $stmt->fetchAll();
?>



<!-- Adaugam un titlu tabelei -->

<h2> UTLIZATORI </h2>



<?php

// afisam rezultatele

// creem un tabel

echo "<table border='1' width='70%'>";

// linie noua

echo "<tr>";

// cap de tabel
echo "<th>Id</th>";
echo "<th>Email</th>";
echo "<th>Parola</th>";
echo "<th>Nume complet</th>";
echo "<th>Status</th>";
echo "<th>Actiuni</th>";
echo "</tr>";


foreach ($users as $user) {
	$id = $user["id"];

	echo "<tr>";

	echo "<td>" . $user['id'] . "</td>";
	echo "<td>" . $user['email'] . "</td>";
	echo "<td>" . $user['password'] . "</td>";
	echo "<td>" . $user['fullname'] . "</td>";

	if($user['status']==1) {
		echo "<td> activ  </td>";
	} else {
		echo "<td> inactiv </td>"; 
	}

	echo "<td> 
			<a href='formular_editare_profile.php?id=" . $id . "'>Editeaza</a> |   
			<a href='sterge.php?id=" . $id . "'>Sterge</a> |";

	if($user['status']==0) {
		echo "<a href='activeaza.php?id=" . $id . "'>Activeaza</a> ";
	} else {
		echo "<a href='dezactiveaza.php?id=" . $id . "'>Dezactiveaza</a>";
	}

	echo "</td>";
	echo "</tr>";

}

echo "</table>";


?>


</body>
</html>
