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

	<p>Introduceti datele pentru un produs nou:</p>

	<input type="text" placeholder="Introdu produs" name="title">

	<input type="text" placeholder="Introdu descrierea produsului" name="descriere" required>

	<input type="number" placeholder="Introdu pretul" name="price">

	<input type="submit" name="submit" value="Adauga produs">


</form>
