<?php
include 'connect.php';

$sql = "SELECT elevi.numele, clasa.nume AS clasa_name
		FROM  `elevi` 
		LEFT JOIN clasa ON elevi.clasa = clasa.diriginte";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	<tr>
		<th>Nume elev</th>
		<th>Nume diriginte</th>
	</tr>
<?php	
foreach($result as $k=>$value) {
	echo "<tr>";
		echo "<td>".$value['numele']."</td>";
		echo "<td>".$value['clasa_name']."</td>";
	echo "</tr>";
}
echo "</table>";