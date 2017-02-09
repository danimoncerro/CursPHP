<?php

session_start(); 

require_once 'conectare.php';

// Gaseste toti utilizatorii din DB dupa un text
function search_all_users($text) {
	global $conn;

	$sql = "SELECT * FROM users 
			WHERE username LIKE '%$text%' ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); // momentan nu ne intereseaza

	$users = []; // cream o variabila temporara  

	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$users[] = $row; // salvam fiecare $row ca si un element nou pentru arrayul $users
		}

	}

	return  $users;
}

// gaseste un utilizator dupa ID
function find_user($id) {
	global $conn;
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		return mysqli_fetch_assoc($result);
	} else {
		return false;
	}
}


// Sterge utilizator dupa ID
// @return boolean - true if delete succeed / else if delete failed 
function delete_user($id) {
	global $conn;

	$sql = "DELETE FROM users WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result){
		return true;
	} else {
		return false;
	}
}


// Gaseste toti utilizatorii din DB
function find_all_users() {
	global $conn;

	$sql = "SELECT * FROM users ";
	$result = mysqli_query($conn, $sql);
	$nr_results = mysqli_num_rows($result); // momentan nu ne intereseaza

	$users = []; // cream o variabila temporara  

	if ($result) {

		while ($row = mysqli_fetch_assoc($result)) {
			$users[] = $row; // salvam fiecare $row ca si un element nou pentru arrayul $users
		}

	}

	return  $users;
}