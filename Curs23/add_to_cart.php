<?php 

  include 'connect.php';
  include 'functions.php';

  $id = $_GET['id'];

  add_to_cart($id);

$_SESSION['message'] = "Am adaugat produsul in cosul de cumparaturi";



  header("Location: view_cart.php");
  exit;