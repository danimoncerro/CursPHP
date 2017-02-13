<?php 
  
  session_start();
  include 'classes/Cart.php';
  
  $cart = new Cart();

  $cart->setId($id);
  $cart->setCantitate($cantitate);
  $cart->add();
  
  $_SESSION['message'] = "Am adaugat produsul in cosul de cumparaturi";

  header("Location: view_cart.php");
  exit;