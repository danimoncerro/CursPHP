<?php

//deschidem sesiunea

session_start();

// include conexiunea la baza de date

include 'connect.php';
include 'functions.php';

// Daca nu este logat redirect catre formular login 
if (!check_logat()) {
	header("Location: formular_login.php");
	exit;
}

// construire sql

$sql = "SELECT * FROM zboruri_plecari";

// pregatire sql

$stmt = $conn->prepare($sql);


// rulare sql

$stmt->execute();

// citim rezultatele

$result = $stmt->fetchAll();

?>
<a href="logout.php">Logout</a>

<h2>Orar plecari</h2>

<?php

// afisam rezultatele
// cream un tabel

echo "<table border=1>";

//cream capul de tabel

echo "<tr>";

	echo "<th>Nr</th>";
	echo "<th>ORA</th>";
	echo "<th>DESTINATIA</th>";
	echo "<th>COMPANIA</th>";
	echo "<th>ACTIUNI</th>";

echo "</tr>";

$nr = 1;

foreach ($result as $k=>$zbor){
	
	$id = $zbor['id'];
	echo "<tr>";
		echo "<td>".$nr."</td>";
		echo "<td>".$zbor['ora']."</td>";
		echo "<td>".$zbor['destinatia']."</td>";
		echo "<td>".$zbor['compania']."</td>";
		echo "<td>
				<a href='formular_editeaza_orar_plecari.php?id=" . $id . "'>Editeaza</a> |   
				<a href='sterge_orar_plecari.php?id=" . $id . "'>Sterge</a>
			  </td>";
	echo "</tr>";
	$nr++;
}

echo "</table>";

?>

<!--Adaugam butonul adauga un nou element in tabel
 -->

<a href="formular_inserare_orar_plecari_utilizatori.php">Adauga zbor</a>

