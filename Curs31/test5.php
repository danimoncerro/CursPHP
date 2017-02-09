<?php
include 'connect.php';



$sql = "SELECT localitate . * , judet.name AS judet_name
		FROM  `localitate` 
		LEFT JOIN judet ON judet.id = localitate.id_judet";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Judet</th>
	</tr>
<?php	
foreach($result as $k=>$value) {
	echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['judet_name']."</td>";
	echo "</tr>";
}
echo "</table>";