<?php

// Model Product -> toate queryurile legate de Product

class Product {

	protected $conn; // COnexiune la baza de date

	public function __construct() {
		global $conn;

		$this->conn = $conn;
	}

	public function findAll() {
		$sql = 'SELECT products.*, culori.culoarea FROM products
				LEFT JOIN culori on culori.id = products.culoare';

    	$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}