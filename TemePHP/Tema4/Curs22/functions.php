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
	$_SESSION['cart'][] = $id_product;
}

