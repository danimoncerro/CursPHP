<?php
include 'connect.php';

$sql = "SELECT * FROM localitate";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<table border=1>";

?>

<th>Id</th>
<th>Oras</th>
<th>Judet</th>

<?php

foreach ($result as $k=>$value){
	echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['id_judet']."</td>";
	echo "</tr>";

}