<?php 

  include 'connect.php';
  include 'functions.php';

  $id = $_GET['id'];

  add_to_cart($id);

  header("Location: view_cart.php");
  exit;