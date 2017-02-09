<?php

/** verifica daca utilizatorul este logat 
 * daca da, atunci returneaza true
 * daca nu, atunci returneaza false 
 **/
function check_logat() {

	if (isset($_SESSION['logat']) && $_SESSION['logat'] == 1) {
		return true;
	} else {
		
		return false;
	}

}

function get_produse($sql) {

	global $conn;

	// pregatim sql-ul

	$stmt = $conn->prepare($sql);

	// executam sql-ul

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();
}


// Return products from cart
function get_cart() {
	$cart = [];

	if (isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
	}

	return $cart;

}


// Add to cart 
function add_to_cart($id_product) {
	global $conn;

	// 1. Citeste datele produsului din baza de date 
	$sql = "SELECT * FROM products
			WHERE id = $id_product";

	$stmt = $conn->prepare($sql);

	$stmt->execute();

	$result = $stmt->fetchAll();

	$product  = $result[0]; // primul element - este singurul element pt ca am cautat dupa id unic.

	// 2. Adauga in cos 
	$_SESSION['cart'][$id_product] = [
		"id" => $id_product,
		"title" => $product["tip"],
		"soi"	 => $product["soi"],
		"culoare" =>  $product["culoare"],
		"pret" => $product["pret"],
		"cantitate" => 1,
	];
}

function calculeaza_total() {
	$mycart = $_SESSION['cart'];
	$total = 0;
	foreach ($mycart as $k=>$produs) {
		$total+=$produs["cantitate"] * $produs["pret"];
	} 
	return $total;
}

function cart_count() {
	if (isset($_SESSION['cart'])) {
		$mycart = $_SESSION['cart'];
		return count($mycart);
	} else {
		return 0;
	}
}

