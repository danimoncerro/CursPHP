<?php 
  
  session_start();
  include 'classes/Cart.php';
  
  
  $id = $_GET['id'];
  
  $cantitate = $_GET["cantitate"];

  $cart = new Cart();

  $cart->setId($id);
  $cart->setCantitate($cantitate);
  $cart->add();
  
  $_SESSION['message'] = "Am adaugat produsul in cosul de cumparaturi";

  header("Location: view_cart.php?id=$id");
 
  exit;