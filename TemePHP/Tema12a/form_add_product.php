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

if(isset($_SESSION['msg_error'])){
 	echo "<span>" . $_SESSION['msg_error'] . "</span>";
}
unset($_SESSION['msg_error']);
?>



<form action="add_product.php" method="post">

	<p>Introduceti datele pentru un auto nou:</p>

	<input type="text" placeholder="Introdu clasa" name="title">

	<input type="text" placeholder="Introdu marca" name="brand" required>

	<input type="text" placeholder="Introdu model" name="model" required>

	<input type="text" placeholder="Introdu tip motor" name="tip" required>

	<input type="number" placeholder="Introdu an fabricatie" name="year" required>

	<input type="number" placeholder="Introdu km" name="km" required min=1>

	<input type="submit" name="submit" value="Adauga produs">


</form>
