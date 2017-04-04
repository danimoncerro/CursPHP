<?php

//deschidem sesiunea

session_start();

// include conexiunea la baza de date

include 'connect.php';

// construire sql

$sql = "SELECT * FROM users";

// pregatire sql

$stmt = $conn->prepare($sql);


// rulare sql

$stmt->execute();

// citim rezultatele

$result = $stmt->fetchAll();

?>
<a href="orar_plecari_admin.php">Vizualizare zboruri</a> | 
<a href="logout.php">Logout</a>

<h2>Utilizatori</h2>

<?php

// afisam rezultatele
// cream un tabel

echo "<table border=1>";

//cream capul de tabel

echo "<tr>";

	echo "<th>Nr</th>";
	echo "<th>Username</th>";
	echo "<th>Password</th>";
	echo "<th>Email</th>";
	echo "<th>Valid</th>";
	echo "<th>Valideaza/Invalideaza</th>";
	echo "<th>Actiuni</th>";
echo "</tr>";

$nr = 1;

foreach ($result as $k=>$utilizator){
	
	$id = $utilizator['id'];
	echo "<tr>";
		echo "<td>".$nr."</td>";
		echo "<td>".$utilizator['username']."</td>";
		echo "<td>".$utilizator['password']."</td>";
		echo "<td>".$utilizator['email']."</td>";
		
		if($utilizator['valid']==1) {
			echo "<td> activ  </td>";
		} else {
			echo "<td> inactiv </td>"; 
		}

		if($utilizator['valid']==0) {
			echo "<td>";
			echo "<a href='activeaza.php?id=" . $id . "'>Activeaza</a> ";
			echo "</td>";
		} else {
			echo "<td>";
			echo "<a href='dezactiveaza.php?id=" . $id . "'>Dezactiveaza</a>";
			echo "</td>";
		}

		echo "<td>
			<a href='formular_editeaza_utilizatori.php?id=" . $id . "'>Editeaza</a> |   
			<a href='sterge.php?id=" . $id . "'>Sterge</a>
			</td>";
	echo "</tr>";
	$nr++;

}
