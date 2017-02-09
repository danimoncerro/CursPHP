<!DOCTYPE html>
<html>
<head>
	<title> Piata auto online </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body>





<?php

require_once 'function.php';

$text = '';
if (isset($_GET['submit'])) {
	
	$text = $_GET['title'];
	$products = search_all_products($text);
} else {
	$products = find_all_products(); 	
}



?>

<h2>Lista auto </h2>
<h3> Total = <?php echo count($products) ?> </h3>

<?php 

if (isset($_SESSION['msg'])) {
	
	echo "<p>" . $_SESSION['msg'] . "</p>";
	
	unset($_SESSION['msg']);
}


?>

<p>
	<form action="" method="get">
	<input type="text" name="title" value="<?php echo $text ?>" placeholder="Filtreaza dupa clasa">
	<input type="submit" value="Filtreaza" name="submit">
	</form>
</p>

<p>
	<a href="form_add_product.php">Adauga auto</a>
</p>

<table class="table1">
<tr>
	<th>Id</th>
	<th>Clasa</th>
	<th>Marca</th>
	<th>Model</th>
	<th>Tip motor</th>
	<th>An fabricatie</th>
	<th>Km</th>
	<th>Imagine</th>
	<th>Actiuni</th>
</tr>

<?php foreach ($products as $product): ?>
<tr>
	<td><?php echo $product['id'] ?></td>
	<td><?php echo $product['title'] ?></td>
	<td><?php echo $product['brand'] ?></td>
	<td><?php echo $product['model'] ?></td>
	<td><?php echo $product['tip'] ?></td>
	<td><?php echo $product['year'] ?></td>
	<td><?php echo $product['km'] ?></td>
	
	<!-- COLOANA POZA: Daca avem poza atunci vom afisa si linkul se va numi: Schimba poza, else nu afisam poza , linkul se va numi: incarca poza -->
	<td>
		<?php if (!empty($product['image'])): ?>
			<img src='<?php echo $product['image'] ?>' class='image-auto'>
			<br>	
	    <?php endif; ?>

		<a href="form_upload.php?id=<?php echo $product['id'] ?>">
			<?php if (!empty($product['image'])): ?>
				Schimba poza
			<?php else: ?>
				Incarca poza
		    <?php endif; ?>
		</a>
	</td>
	

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