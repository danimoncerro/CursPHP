<?php

require_once 'Database.php';

class Fruit {

	const TABLENAME = "fructe"; // pt ca nu se schimba numele tabelului pana la executa scriptului 

	public function __construct() {
		echo "fruit constructor";
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
    public function insert($nume, $gust, $provenienta){

    	$sql = "INSERT INTO " . self::TABLENAME . " (nume, gust, provenienta )
    			VALUES ('$nume', '$gust', '$provenienta')";


    	$db = new Database(); // se creeaza conexiunea la baza de date

    	$db->getConnection()->exec($sql);
    	return "Datele au fost introduse cu succes.";
    }


}