<?php

// 1. include header

include 'header.php';

// 2. cream variabila id_comanda citind valoarea din url

$id = $_GET['id'];

// 3. cream sql de interogare (citire)

$sql = "SELECT comenzi_detalii. * , products.tip, products.soi, culori.culoarea
		FROM  `comenzi_detalii` 
		LEFT JOIN products ON comenzi_detalii.id_produs = products.id
		LEFT JOIN culori ON culori.id = products.culoare
		WHERE comenzi_detalii.id_comanda = $id ";

// 4. executam sql

$stmt = $conn->prepare($sql);
$stmt->execute();

// 5. afisam rezultatele intr-un tabel

$results = $stmt->fetchAll();

?>
<br><br><br><br>
<table border=1>
	<tr>
		<th>ID COMANDA</th>
		<th>PRODUS</th>
		<th>CANTITATE</th>
		<th>PRET</th>
		<th>VALOARE</th>
	</tr>

<?php
foreach ($results as $k=>$produs){
	echo "<tr>";

		echo "<td>";
			echo $produs['id_comanda'];		
		echo "</td>";
		echo "<td>";
			echo $produs['tip'] .' '. $produs['soi'] .' '. $produs['culoarea'];		
		echo "</td>";
		echo "<td>";
			echo $produs['cantitate'];		
		echo "</td>";
		echo "<td>";
			echo $produs['pret'];		
		echo "</td>";
		echo "<td>";
			echo $produs['valoare'];		
		echo "</td>";

	echo "</tr>";
}
?>
</table>
<br>

<a href="comenzi.php">Vizualizare comenzi</a>

<?php

// include footer.php

include 'footer.php';