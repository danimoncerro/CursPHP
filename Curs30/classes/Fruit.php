<?php

require_once 'Database.php';

class Fruit {

	const TABLENAME = "fructe"; // pt ca nu se schimba numele tabelului pana la executa scriptului 

	// Coloane din tabelul fructe
	protected $id = 0;
	protected $nume = '';
	protected $gust = '';
	protected $provenienta = '';

	public function __construct() {
		// echo "fruit constructor";
	}

	public function setNume($_nume){
		$this->nume = $_nume;
	}

	public function setGust($_gust){
		$this->gust = $_gust;
	}

	public function setProvenienta($_provenienta){
		$this->provenienta = $_provenienta;
	}

	public function setId($_id) {
		$this->id =$_id;
	}

	public function getId() {
		return $this->id;
	}

	public function getNume() {
		return $this->nume;
	}

	public function getProvenienta() {
		return $this->provenienta;
	}

	public function getGust() {
		return $this->gust;
	}



	// Cauta un record dupa id. Va returna un singur record.
	public function findOneById($id) {
	
		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetch();

		// Salvam in proprietati 
		$this->setNume($results['nume']);
		$this->setGust($results['gust']);
		$this->setProvenienta($results['provenienta']);
		$this->setId($results['id']);

		return $results; 
	}

	// Citim toate datele din tabelul fructe 
	public function findAll(){
    
		$sql = 'SELECT * FROM ' . self::TABLENAME;

    	$db = new Database(); // se creeaza conexiunea la baza de date
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();
	
		return $results; 
    }


    // Insereaza un record in baza de date
    public function save(){

    	$sql = "INSERT INTO " . self::TABLENAME . " (nume, gust, provenienta )
    			VALUES ('$this->nume', '$this->gust', '$this->provenienta')";

    	$db = new Database(); // se creeaza conexiunea la baza de date
    	$db->getConnection()->exec($sql);

    	return "Datele au fost introduse cu succes.";
    }

    // Echo 1 fruit / record 
    public function display(){
    	echo $this->nume . $this->gust . $this->provenienta;
    }

    // Echo all fruits  in table 
    public function displayAllAsTable() {
    	
    	// Afisam $products cu dublu foreach 
		echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Nume</th>";
		echo "<th>Gust</th>";
		echo "<th>Provenienta</th>";
		echo "</tr>";

		foreach($this->findAll() as $k => $fruit){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $fruit["id"] . "</td>";
			echo "<td> " . $fruit["nume"] . "</td>";
			echo "<td> " . $fruit["gust"] . "</td>";
			echo "<td> " . $fruit["provenienta"] . "</td>";
			
			echo "</tr>";
		}

		echo "</table>";
    }

    //Actulizare
    public function update(){

		$sql = "UPDATE " . self::TABLENAME . "
				SET nume = '$this->nume', 
					gust = '$this->gust',
					provenienta = '$this->provenienta'
				WHERE id= $this->id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		
		if ($stmt->execute()) {
			// Afisam un mesaj
			echo "S-a actualizat cu succes (id = $this->id ). <br>";
		} else {
			// Afisam un mesaj
			echo "Eroare actualizare produs";
		}
    }

}