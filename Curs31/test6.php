<?php
include 'connect.php';

$sql = "SELECT * FROM judet";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Localitate</th>
	</tr>
<?php	
foreach($result as $k=>$value) {
	echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['id']."</td>";
	echo "</tr>";
}
echo "</table>";