<?php
include 'connect.php';



$sql = "SELECT localitate . * , judet.name AS judet_name
		FROM  `localitate` 
		LEFT JOIN judet ON judet.id = localitate.id_judet";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";
?>	
	<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Judet</th>
		<th>Actiuni</th>
	</tr>
<?php	
foreach($result as $k=>$value) {
	$id = $value['id'];
?>
	<tr>
		<td><?php echo $value['id'] ?></td>
		<td><?php echo $value['name'] ?></td>
		<td><?php echo $value['judet_name'] ?></td>
		<td><a href='tema_editeaza_localitate.php?id=<?php echo $id ?>'>Edit localitate</a></td>
	</tr>

<?php
}

echo "</table>";