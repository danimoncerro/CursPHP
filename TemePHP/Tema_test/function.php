<?php

//include 'connect.php';

function get_produse($sql){
	
	global $conn;

	// pregatire sql

	$stmt = $conn->prepare($sql);

	// rulare sql

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();
}