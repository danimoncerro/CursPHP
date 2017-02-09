<?php

include 'connect.php';

$sql = "SELECT judet.*, localitate.name AS localitate_name
		FROM judet
		LEFT JOIN localitate ON judet.id = localitate.id_judet";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<table border=1>
	<tr>
		<th>Id</th>
		<th>Judet</th>
		<th>Localitate</th>
	</tr>

<?php

foreach($result as $k=>$value) {
	echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['localitate_name']."</td>";
	echo "</tr>";
}
echo "</table>";

