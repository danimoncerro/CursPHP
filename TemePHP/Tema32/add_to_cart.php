<?php 
  
require_once 'config.php';
  
  
$id = $_GET['id'];
$cantitate = $_GET["cantitate"];

$cart = new Cart();
$cart->add($id, $cantitate);
  
$_SESSION['message'] = "Am adaugat produsul in cosul de cumparaturi.";

header("Location: view_cart.php");
 
exit;