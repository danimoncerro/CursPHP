<?php 

  include 'connect.php';
  include 'functions.php';

  $id = $_GET['id'];
  $cantitate = $_GET["cantitate"];

  add_to_cart($id, $cantitate);

$_SESSION['message'] = "Am adaugat produsul in cosul de cumparaturi";



  header("Location: view_cart.php");
  exit;