<?php

//deschidem sesiunea

session_start();

// include conexiunea la baza de date

include 'connect.php';

// construire sql

$sql = "SELECT * FROM zboruri_plecari";

// pregatire sql

$stmt = $conn->prepare($sql);


// rulare sql

$stmt->execute();

// citim rezultatele

$result = $stmt->fetchAll();

?>
<a href="formular_login.php">Login</a> | 
<a href="formular_new_user.php">New User</a>

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
//	echo "<th>ACTIUNI</th>"; 

echo "</tr>";

$nr = 1;

foreach ($result as $k=>$zbor){
	
	echo "<tr>";
		echo "<td>".$nr."</td>";
		echo "<td>".$zbor['ora']."</td>";
		echo "<td>".$zbor['destinatia']."</td>";
		echo "<td>".$zbor['compania']."</td>";
	echo "</tr>";
	$nr++;

}
