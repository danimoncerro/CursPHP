<?php

class Database {
	public function connect(){
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = 'tema28';


// realizare conexiune


	try {
		$conn = new PDO("mysql:host=$server; dbname=$database", $username, $password);
		//echo "Conexiunea la baza de date s-a realizat cu succes.";

	}

	catch(PDOException $e) {
		echo "Conexiunea a esuat" . $e->getMessage();

	}
	};

  //  public function disconnect(){
  // };

    public function select(){  
    };

    public function insert(){
    };

    public function delete(){
    };

    public function update(){
    };
	
}