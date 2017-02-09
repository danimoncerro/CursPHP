<?php

include 'connect.php';


// construim sql

$sql = "SELECT localitate.*, judet.name AS judet_name
        FROM localitate
        LEFT JOIN judet ON judet.id = localitate.id_judet";

// pregatim sql

$stmt = $conn->prepare($sql);

// executam sql

$stmt->execute();

// afisam rezultatele intr-un tabel

$result = $stmt->fetchAll();

?>

<table border=1>
	<tr>
		<th>Id</th>
		<th>Localitate</th>
		<th>Judet</th>
		<th>Actiuni</th>
	</tr>

<?php

foreach ($result as $k=>$value) {
?>
	<tr>
		<td> <?php echo $value['id'] ?> </td>
		<td> <?php echo $value['name'] ?></td>
		<td> <?php echo $value['judet_name'] ?></td>
		<td> <a href="tema_editeaza_localitate1.php?id=<?php echo $value['id']?>">Editeaza localitate</a> </td>
	</tr>

<?php
}

echo "</table>";

