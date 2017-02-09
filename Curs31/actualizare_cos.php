<?php 

include 'connect.php';
include 'functions.php';

// Se citesc valorile sub forma de array 
$ids = $_GET["id"];
$cantitati = $_GET["cantitate"];

// Parcurgem produsele
foreach ($ids as $k => $id) {
	$cantitate = $cantitati[$k];

	update_cart_product($id, $cantitate);	
}

$_SESSION['message'] = "Cosul a fost actualizat cu succes";

header("Location: view_cart.php");
exit;