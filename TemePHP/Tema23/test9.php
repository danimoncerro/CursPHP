<?php
include 'connect.php';

$sql = "SELECT *, elevi.id as id_elev FROM  `elevi` 
		LEFT JOIN clasa ON elevi.clasa = clasa.diriginte
		ORDER BY elevi.clasa ASC";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";

?>	<tr>
		<th>Id elev</th>
		<th>Nume elev</th>
		<th>Clasa</th>
		<th>Id profesor</th>
		<th>Nume diriginte</th>
		<th>Materia</th>
		<th>Actiuni</th>
	</tr>
<?php	

foreach($result as $k=>$value) {
	$id = $value['id_elev'];
?>
	<tr>
		<td><?php echo $value['id_elev'] ?></td>
		<td><?php echo $value['numele'] ?></td>
		<td><?php echo $value['clasa'] ?></td>
		<td><?php echo $value['id'] ?></td>
		<td><?php echo $value['nume'] ?></td>
		<td><?php echo $value['materia'] ?></td>
		<td><a href='editeaza_elev.php?id=<?php echo $id ?>'>Edit elev</a></td>
	</tr>

<?php
}
echo "</table>";