<?php

require_once 'config.php';

$id = $_GET['id'];

$product = new Cart();
$product->deleteProduct($id);
$_SESSION['message'] = "Produsul a fost sters din cosul de cumparaturi.";
header('LOCATION: view_cart.php');
exit;
 