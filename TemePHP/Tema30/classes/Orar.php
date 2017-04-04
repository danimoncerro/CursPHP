<?php

require_once 'Database.php';

class OrarPlecari {
	const TABLENAME = "zboruri_plecari"; 
	protected $id = 0;
	protected $ora_decolare = '';
	protected $destinatia = '';
	protected $compania = '';

	public function setId($_id){
		$this->id = $_id;
	}

	public function setOraDecolare($_ora_decolare){
		$this->ora_decolare = $_ora_decolare;
	}

	public function setDestinatia($_destinatia){
		$this->destinatia = $_destinatia;
	}

	public function setCompania($_compania) {
		$this->compania = $_compania;
	}

	public function getId() {
		return $this->id;
	}

	public function getOraDecolare() {
		return $this->ora_decolare;
	}

	public function getDestinatia() {
		return $this->destinatia;
	}

	public function getCompania() {
		return $this->compania;
	}
	
	// Citim toate datele din tabelul zboruri_plecari 
	public function findAll(){
    
		$sql = 'SELECT * FROM ' . self::TABLENAME;

    	$db = new Database(); // se creeaza conexiunea la baza de date
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();
	
		return $results; 
    }

    public function findOneById($id) {
	
		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetch();

		// Salvam in proprietati 
		$this->setOraDecolare($results['ora_decolare']);
		$this->setDestinatia($results['destinatia']);
		$this->setCompania($results['compania']);
		$this->setId($results['id']);

		return $results; 
	}


    // Insereaza un record in baza de date
    public function save(){

    	$sql = "INSERT INTO " . self::TABLENAME . " (ora_decolare, destinatia, 
    	        compania)
    			VALUES ('$this->ora_decolare', '$this->destinatia', 
    			'$this->compania')";

    	$db = new Database(); // se creeaza conexiunea la baza de date
    	$db->getConnection()->exec($sql);

    	return "Datele au fost introduse cu succes.";
    }

    public function delete($id){

    	$sql = "DELETE FROM " . self::TABLENAME . "
		WHERE id=$id";

    	$db = new Database(); // se creeaza conexiunea la baza de date
    	$stmt = $db->getConnection()->prepare($sql);

    	if($stmt->execute()) {
			echo "<p> Stergerea s-a facut cu succes! </p>";
		} else {
			echo "S-a produs o eroare la operatiunea de stergere.";
		}		
    }

    
    // Echo all zboruri  in table 
    public function displayAll() {
    	
    	echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Ora decolare</th>";
		echo "<th>Destinatia</th>";
		echo "<th>Compania</th>";
		echo "</tr>";

		foreach($this->findAll() as $k => $zbor){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $zbor["id"] . "</td>";
			echo "<td> " . $zbor["ora_decolare"] . "</td>";
			echo "<td> " . $zbor["destinatia"] . "</td>";
			echo "<td> " . $zbor["compania"] . "</td>";
			
			echo "</tr>";
		}

		echo "</table>";
    }

    public function displayAllLogat() {
    	
    	echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Ora decolare</th>";
		echo "<th>Destinatia</th>";
		echo "<th>Compania</th>";
		echo "<th>Actiuni</th>";
		echo "</tr>";

		foreach($this->findAll() as $k => $zbor){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $zbor["id"] . "</td>";
			echo "<td> " . $zbor["ora_decolare"] . "</td>";
			echo "<td> " . $zbor["destinatia"] . "</td>";
			echo "<td> " . $zbor["compania"] . "</td>";
			echo "<td>
				<a href='tema4_formular_editeaza_orar_plecari.php?id=" . $zbor["id"] . "'>Editeaza</a> |   
				<a href='tema4_sterge_orar_plecari.php?id=" . $zbor["id"] . "'>Sterge</a>
			  </td>";
			
			echo "</tr>";
		}

		echo "</table>";
    }

    //Actulizare
    public function update(){

		$sql = "UPDATE " . self::TABLENAME . "
				SET ora_decolare = '$this->ora_decolare', 
					destinatia = '$this->destinatia',
					compania = '$this->compania'
				WHERE id= $this->id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		
		if ($stmt->execute()) {
			// Afisam un mesaj
			echo "Datele s-au actualizat cu succes.<br>";
		} else {
			// Afisam un mesaj
			echo "Eroare actualizare zbor";
		}
    }

}

class OrarSosiri {
	const TABLENAME = "zboruri_sosiri"; 
	protected $id = 0;
	protected $ora_aterizare = '';
	protected $de_la = '';
	protected $compania = '';

	public function setId($_id){
		$this->id = $_id;
	}

	public function setOraAterizare($_ora_aterizare){
		$this->ora_aterizare = $_ora_aterizare;
	}

	public function setDeLa($_de_la){
		$this->de_la = $_de_la;
	}

	public function setCompania($_compania) {
		$this->compania = $_compania;
	}

	public function getId() {
		return $this->id;
	}

	public function getOraAterizare() {
		return $this->ora_aterizare;
	}

	public function getDeLa() {
		return $this->de_la;
	}

	public function getCompania() {
		return $this->compania;
	}
	
	// Citim toate datele din tabelul zboruri_soriri 
	public function findAll(){
    
		$sql = 'SELECT * FROM ' . self::TABLENAME;

    	$db = new Database(); // se creeaza conexiunea la baza de date
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();
	
		return $results; 
    }

    public function findOneById($id) {
	
		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetch();

		// Salvam in proprietati 
		$this->setOraAterizare($results['ora_aterizare']);
		$this->setDeLa($results['de_la']);
		$this->setCompania($results['compania']);
		$this->setId($results['id']);

		return $results; 
	}


    // Insereaza un record in baza de date
    public function save(){

    	$sql = "INSERT INTO " . self::TABLENAME . " (ora_aterizare, de_la, 
    	        compania)
    			VALUES ('$this->ora_aterizare', '$this->de_la', 
    			'$this->compania')";

    	$db = new Database(); // se creeaza conexiunea la baza de date
    	$db->getConnection()->exec($sql);

    	return "Datele au fost introduse cu succes.";
    }

    public function delete($id){

    	$sql = "DELETE FROM " . self::TABLENAME . "
		WHERE id=$id";

    	$db = new Database(); // se creeaza conexiunea la baza de date
    	$stmt = $db->getConnection()->prepare($sql);

    	if($stmt->execute()) {
			echo "<p> Stergerea s-a facut cu succes! </p>";
		} else {
			echo "S-a produs o eroare la operatiunea de stergere.";
		}		
    }

    
    // Echo all zboruri  in table 
    public function displayAll() {
    	
    	echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Ora aterizare</th>";
		echo "<th>De la</th>";
		echo "<th>Compania</th>";
		echo "</tr>";

		foreach($this->findAll() as $k => $zbor){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $zbor["id"] . "</td>";
			echo "<td> " . $zbor["ora_aterizare"] . "</td>";
			echo "<td> " . $zbor["de_la"] . "</td>";
			echo "<td> " . $zbor["compania"] . "</td>";
			
			echo "</tr>";
		}

		echo "</table>";
    }

    public function displayAllLogat() {
    	
    	echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Ora aterizare</th>";
		echo "<th>De la</th>";
		echo "<th>Compania</th>";
		echo "<th>Actiuni</th>";
		echo "</tr>";

		foreach($this->findAll() as $k => $zbor){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $zbor["id"] . "</td>";
			echo "<td> " . $zbor["ora_aterizare"] . "</td>";
			echo "<td> " . $zbor["de_la"] . "</td>";
			echo "<td> " . $zbor["compania"] . "</td>";
			echo "<td>
				<a href='tema5_formular_editeaza_orar_sosiri.php?id=" . $zbor["id"] . "'>Editeaza</a> |   
				<a href='tema5_sterge_orar_sosiri.php?id=" . $zbor["id"] . "'>Sterge</a>
			  </td>";
			
			echo "</tr>";
		}

		echo "</table>";
    }

    //Actulizare
    public function update(){

		$sql = "UPDATE " . self::TABLENAME . "
				SET ora_aterizare = '$this->ora_aterizare', 
					de_la = '$this->de_la',
					compania = '$this->compania'
				WHERE id= $this->id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		
		if ($stmt->execute()) {
			// Afisam un mesaj
			echo "Datele s-au actualizat cu succes.<br>";
		} else {
			// Afisam un mesaj
			echo "Eroare actualizare zbor";
		}
    }
	

}