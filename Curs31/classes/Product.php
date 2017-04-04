<?php


class Product {

	const TABLENAME = "products"; 
	protected $id = 0;
	protected $tip = '';
	protected $soi = '';
	protected $culoare = '';
	protected $pret = 0;
	protected $conn = false ;

	public function __construct() {
		$db = new Database();
		$this->conn = $db->getConnection();
	}

	protected function getConnection() {
    	return $this->conn;
    }


	public function setId($_id){
		$this->id = $_id;
	}

	public function setTip($_tip){
		$this->tip = $_tip;
	}

	public function setSoi($_soi){
		$this->soi = $_soi;
	}

	public function setCuloare($_culoare) {
		$this->culoare = $_culoare;
	}

	public function setPret($_pret){
		$this->pret = $_pret;
	}

	public function getId() {
		return $this->id;
	}

	public function getTip() {
		return $this->tip;
	}

	public function getsoi() {
		return $this->soi;
	}

	public function getCuloare() {
		return $this->culoare;
	}

	public function getPret() {
		return $this->pret;
	}


		// Citim toate datele din tabelul products 
	public function findAll(){
    
		$sql = 'SELECT products.*, culori.culoarea FROM ' . self::TABLENAME . '
				LEFT JOIN culori on culori.id = products.culoare';

    	$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();
	
		return $results; 
    }

    public function findOneById($id) {
	
		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $id";

		$stmt = $db->conn->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetch();

		// Salvam in proprietati 
		$this->setId($results['id']);
		$this->setTip($results['tip']);
		$this->setSoi($results['soi']);
		$this->setCuloare($results['culoare']);
		$this->setPret($results['pret']);

		return $results; 
	}


    // Insereaza un record in baza de date
    public function save(){

    	$sql = "INSERT INTO " . self::TABLENAME . " (tip, soi, 
    	        culoare, pret)
    			VALUES ('$this->tip', '$this->soi', 
    			'$this->culoare', '$this->pret')";

    	$this->conn->exec($sql);

    	return "Datele au fost introduse cu succes.";
    }

    public function delete($id){

    	$sql = "DELETE FROM " . self::TABLENAME . "
		WHERE id=$id";

    	$stmt = $this->conn->prepare($sql);

    	if($stmt->execute()) {
			echo "<p> Stergerea s-a facut cu succes! </p>";
		} else {
			echo "S-a produs o eroare la operatiunea de stergere.";
		}		
    }

    public function update(){

		$sql = "UPDATE " . self::TABLENAME . "
				SET tip = '$this->tip', 
					soi = '$this->soi',
					culoare = '$this->culoare',
					pret = '$this->pret'
				WHERE id= $this->id";

		$stmt = $this->conn->prepare($sql);
		
		if ($stmt->execute()) {
			// Afisam un mesaj
			echo "Datele s-au actualizat cu succes.<br>";
		} else {
			// Afisam un mesaj
			echo "Eroare actualizare date";
		}
    }

}
