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

$id = $_GET['id'];
$product = find_product($id);

?>



<h1>Editeaza produs</h1>

<?php if (isset($_SESSION['msg_error'])): ?>
	<?php echo "<span>" . $_SESSION['msg_error'] . "</span>"; ?>


<?php unset($_SESSION['msg_error']); ?>
<?php endif; ?>


<form action="edit_product.php?id=<?php echo $product['id'] ?>" method="post">

	<input type="text" value="<?php echo $product['title'] ?>" placeholder="Introdu clasa" name="title">

	<input type="text" value="<?php echo $product['brand'] ?>" placeholder="Introdu marca" name="brand" required>

	<input type="text" value="<?php echo $product['model'] ?>"  placeholder="Introdu model" name="model" required>

	<input type="text" value="<?php echo $product['tip'] ?>"  placeholder="Introdu tip motor" name="tip" required>

	<input type="number" value="<?php echo $product['year'] ?>"  placeholder="Introdu an fabricatie" name="year" required>

	<input type="number" value="<?php echo $product['km'] ?>" placeholder="Introdu km" name="km" required min=1> <br><br>

	<input type="submit" name="submit" value="Editeaza produs">

</form>