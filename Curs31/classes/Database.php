<?php

class Database {

	public $server='localhost';
	public $username='root';
	public $password='';
	public $database='magazin';
	public $conn; // Conexiune la baza de date

	// Ne conectam la baza de date 
	public function __construct() {
		try {
			$this->conn = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
		}
		catch (PDOException $e) {
			echo "Conexiune esuata: " . $e->getMessage();
		}
	}

	// Verificam conexiunea la baza de date 
	public function checkConnection() {
		if ($this->conn) {
			echo "Conexiune reusita";
		} else {
			echo "Conexiune esuata";
		}
	}

	// Returneaza conexiunea la baza de date 
	public function getConnection() {
		return $this->conn;
	}
}