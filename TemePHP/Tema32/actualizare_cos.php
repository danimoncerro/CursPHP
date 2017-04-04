<?php

require_once 'config.php';

// array
$id = $_GET['id'];
// array 
$cantitate = $_GET['cantitate'];



$cart = new Cart();
$cart->actualizare($id, $cantitate);
  
$_SESSION['message'] = "Am actualizat cosul de cumparaturi.";

header("Location: view_cart.php");
 
exit;

