<!DOCTYPE html>
<html>
<head>
	<title> Tabel Fructe </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body>

<?php

include 'classes/Database.php';

?>

<h2>Lista Fructe </h2>

<p>
	<a href="tema7_form_add_fruct.php">Adauga fruct</a>
</p>

<table class="table1">
<tr>
	<th>ID</th>
	<th>Nume</th>
	<th>Gust</th>
	<th>Provenienta</th>
	<th>Actiuni</th>
</tr>

<?php

// cream un obiect nou

$fruct = new Database();

// cream o variabila in care vom salva rezultatele returnate de metoda selectDatabase();

$fructe = $fruct->selectDatabase();


foreach ($fructe as $product): ?>
	<tr>
		<td><?php echo $product['id'] ?></td>
		<td><?php echo $product['nume'] ?></td>
		<td><?php echo $product['gust'] ?></td>
		<td><?php echo $product['provenienta'] ?></td>
		<td>
			<a href="tema7_form_edit_fruct.php?id=<?php echo $product['id'] ?>">Editeaza</a>
		| 
			<a href="tema7_delete_fruct.php?id=<?php echo $product['id'] ?>"
		   onclick="if (!window.confirm('Esti sigur?')) return false;">Sterge</a>
		</td>
	</tr>
<?php endforeach; ?>


</body>
</html>

