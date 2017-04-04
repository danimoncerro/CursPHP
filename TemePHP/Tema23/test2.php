<?php
include 'connect.php';


$sql = "SELECT comenzi.* , users.username
		FROM comenzi
		LEFT JOIN users ON users.id = comenzi.id_user
		ORDER BY comenzi.id DESC";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	<tr>
		<th>NUMAR COMANDA</th>
		<th>UTILIZATOR</th>
		<th>DATA COMENZII</th>
		<th>LEI</th>
	</tr>
<?php	
foreach($result as $k=>$produs) {
	echo "<tr>";
		echo "<td>".$produs['id']."</td>";
		echo "<td>".$produs['username']."</td>";
		echo "<td>".date("d-m-Y H:i:s", $produs["created_at"])."</td>";
		echo "<td>".$produs['total']."</td>";
	echo "</tr>";
}
echo "</table>";