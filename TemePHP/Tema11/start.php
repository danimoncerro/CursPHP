<!DOCTYPE html>
<html>
<head>
	<title> Produse fitosanitare </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body>





<?php

require_once 'function.php';

$text = '';
if (isset($_GET['submit'])) {
	//echo "vom apela functie de filtrare";
	$text = $_GET['title'];
	$products = search_all_products($text);
} else {
	$products = find_all_products(); // am toate produsele	
}



?>

<h2>Lista produselor fitosanitare </h2>
<h3> Total produse = <?php echo count($products) ?> </h3>

<?php 
// Mesajul din sesiune 
if (isset($_SESSION['msg'])) {
	// afisam mesajul din sesiune
	echo "<p>" . $_SESSION['msg'] . "</p>";
	// stergem mesajul din sesiune
	unset($_SESSION['msg']);
}


?>

<p>
	<form action="" method="get">
	<input type="text" name="title" value="<?php echo $text ?>" placeholder="Filtreaza dupa titlu">
	<input type="submit" value="Filtreaza" name="submit">
	</form>
</p>

<p>
	<a href="form_add_product.php">Adauga produs</a>
</p>

<table class="table1">
<tr>
	<th>ID</th>
	<th>Nume produs</th>
	<th>Descriere</th>
	<th>Pret</th>
	<th>Actiuni</th>
</tr>

<?php foreach ($products as $product): ?>
<tr>
	<td><?php echo $product['id'] ?></td>
	<td><?php echo $product['title'] ?></td>
	<td><?php echo $product['descriere'] ?></td>
	<td><?php echo $product['price'] ?></td>
	<td>
		<a href="form_edit_product.php?id=<?php echo $product['id'] ?>">Editeaza</a>
		| 
		<a href="delete_product.php?id=<?php echo $product['id'] ?>"
		   onclick="if (!window.confirm('Esti sigur?')) return false;">Sterge</a>

	</td>
</tr>
<?php endforeach; ?>


</body>
</html>