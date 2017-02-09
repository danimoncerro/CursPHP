<?php

class Database {
	public $server='localhost';
	public $username='root';
	public $password='';
	public $database='tema28';
	public $conn;

// Construim medota __construct() care va realiza conexiunea automata la baza de date		

	public function __construct(){
		$this->connectDatabase();
	}

	public function connectDatabase(){

// Realizam conexiunea 	
	
		try {
			$conn1 = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
			$this->conn = $conn1;
			//echo "Conexiune reusita";
		}

		catch (PDOException $e) {
			echo "Conexiune esuata: " . $e->getMessage();
		}
	}

    public function selectDatabase(){
    
// Definim SQL-ul

		$sql = 'SELECT * FROM fructe';

// Pregateste SQL-ul final 

		$stmt = $this->conn->prepare($sql);
	
// Executam SQL-ul

		$stmt->execute();

// Citim rezultatele

		$results = $stmt->fetchAll();

		return $results; 

    }

    public function insertDatabase($nume, $gust, $provenienta){

// Construim sql-ul pentru insert

    	$sql = "INSERT INTO fructe (nume, gust, provenienta )
    			VALUES ('$nume', '$gust', '$provenienta')";

// Executam sql-ul

    	$this->conn->exec($sql);
    	echo "Datele au fost introduse cu succes.";

    }

    public function deleteDatabase($id){

// Construim sql-ul pentru delete

		$sql = "DELETE FROM fructe 
				WHERE id=$id";

// Pregatim sql-ul 

		$stmt = $this->conn->prepare($sql);

//executam sql

		if ($stmt->execute()) {

//afisam un mesaj

			echo "Stergerea s-a facut cu succes.";

		} else {
	
//afisam un mesaj
	
		echo "Eroare stergere. Produsul nu exista";

		}

    }

    public function updateDatabase($id, $nume, $gust, $provenienta){

// Construim sql-ul pentru update

		$sql = "UPDATE fructe
				SET nume = '$nume', 
					gust = '$gust',
					provenienta = '$provenienta'
				WHERE id=$id";

// Pregatim sql-ul

		$stmt = $this->conn->prepare($sql);

// Executam sql-ul
		
		if ($stmt->execute()) {
// Afisam un mesaj
			echo "S-a actualizat cu succes.";
		} else {
// Afisam un mesaj
			echo "Eroare actualizare produs";
		}

    }

    public function findDatabase($id) {
	
// Construim sql-ul pentru find

		$sql = "SELECT * FROM fructe
				WHERE id = $id";

// Pregatim sql-ul final 

		$stmt = $this->conn->prepare($sql);

// Executam sql-ul

		$stmt->execute();

// Citim rezultatele

		$results = $stmt->fetch();

		return $results; 

	}
}
