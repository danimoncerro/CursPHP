<?php


session_start(); 

require_once 'conectare.php';


function search_all_products($text) {
	global $conn;

	$sql = "SELECT * FROM auto 
			WHERE title LIKE '%$text%' ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); 

	$product = []; 

	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$product[] = $row; 
		}

	}

	return  $product;
}

function find_all_products() {
	global $conn;

	$sql = "SELECT * FROM auto ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); 

	$product = []; 
	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$product[] = $row; 
		}

	}

	return  $product;

}

function delete_product($id) {
	global $conn;

	$sql = "DELETE FROM auto WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result){
		return true;
	} else {
		return false;
	}
}

function find_product($id) {
	global $conn;
	$sql = "SELECT * FROM auto WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		return mysqli_fetch_assoc($result);
	} else {
		return false;
	}
}