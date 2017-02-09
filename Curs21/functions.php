<?php

function get_cheltuieli($sql) {
	global $conn;

	// pregatim sql-ul

	$stmt = $conn->prepare($sql);

	// executam sql-ul

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();

}