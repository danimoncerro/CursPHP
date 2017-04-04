<?php

include 'config.php';


// Pas1: Citim idul produsului
$id_product = $_GET['id'];

// Pas2: stergem din sesiune produsul cu id-ul dorit din cos 
$cart = new Cart();
$cart->remove($id_product);
// Daca dorim sa stergem tot cosul atunci rulam: unset($_SESSION['cart']);

// Pas3: Adaugam un mesaj in sesiune 
$_SESSION['message'] = "Am sters produsul selectat.";


// Pas4: redirectare catre cosul meu 
header("Location:view_cart.php");
exit;