<?php


session_start(); 

require_once 'conectare.php';

// Gaseste toate produsele din DB dupa un text
function search_all_products($text) {
	global $conn;

	$sql = "SELECT * FROM product 
			WHERE title LIKE '%$text%' ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); 

	$product = []; // cream o variabila temporara  

	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$product[] = $row; // salvam fiecare $row ca si un element nou pentru arrayul $product
		}

	}

	return  $product;
}

function find_all_products() {
	global $conn;

	$sql = "SELECT * FROM product ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); 

	$product = []; // cream o variabila temporara  

	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$product[] = $row; // salvam fiecare $row ca si un element nou pentru arrayul $product
		}

	}

	return  $product;

}

function delete_product($id) {
	global $conn;

	$sql = "DELETE FROM product WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result){
		return true;
	} else {
		return false;
	}
}

function find_product($id) {
	global $conn;
	$sql = "SELECT * FROM product WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		return mysqli_fetch_assoc($result);
	} else {
		return false;
	}
}