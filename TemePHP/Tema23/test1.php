<?php
include 'connect.php';

$sql = "SELECT * FROM products";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	<tr>
		<th>Tip</th>
		<th>Soi</th>
		<th>Culoare</th>
		<th>Pret</th>
	</tr>
<?php	
foreach($result as $k=>$produs) {
	echo "<tr>";
		echo "<td>".$produs['tip']."</td>";
		echo "<td>".$produs['soi']."</td>";
		echo "<td>".$produs['culoare']."</td>";
		echo "<td>".$produs['pret']."</td>";
	echo "</tr>";
}
echo "</table>";