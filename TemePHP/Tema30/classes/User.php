<?php

require_once 'Database.php';

class User {

	const TABLENAME = "users";
	protected $id = 0;
	protected $username = '';
	protected $password = '';
	protected $email = '';
	protected $valid = 0;

	public function setId($_id){
		$this->id = $_id;
	}

	public function setUsername($_username) {
		$this->username = $_username;
	}

	public function setPassword($_password) {
		$this->password = $_password;
	}

	public function setEmail($_email) {
		$this->email = $_email;
	}

	public function setValid($_valid) {
		$this->valid = $_valid;
	}

	public function getId() {
		return $this->id;
	}

	public function getUsername() {
		return $this->username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getValid() {
		return $this->valid;
	}

	// Insereaza un record in baza de date
    public function save(){

    	$sql = "INSERT INTO " . self::TABLENAME . " (username, password, email, 
    	        valid )
    			VALUES ('$this->username', '$this->password', '$this->email',
    			$this->valid)";

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

    // Citim toate datele din tabelul users
	public function findAll(){
    
		$sql = 'SELECT * FROM ' . self::TABLENAME;

    	$db = new Database(); // se creeaza conexiunea la baza de date
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();

		return $results; 
    }

    /**
     * Find an user by id 
     *
     * @param int $id - id of the user 
     * @return array $user - all user information
     */
    public function findOneById($id) {
	
		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

		// Save columns in properties 
		$this->setId($result['id']);
		$this->setUsername($result['username']);
		$this->setEmail($result['email']);
		$this->setPassword($result['password']);
		$this->setValid($result['valid']);

		return $result; 
	}

    public function update(){

		$sql = "UPDATE " . self::TABLENAME . "
				SET username = '$this->username', 
					password = '$this->password',
					email = '$this->email',
					valid = '$this->valid'
				WHERE id= $this->id";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		
		if ($stmt->execute()) {
			// Afisam un mesaj
			echo "Datele s-au actualizat cu succes. <br>";
		} else {
			// Afisam un mesaj
			echo "Eroare actualizare user";
		}
    }

    // Cauta un record dupa id. Va returna un singur record.
	public function findLogin() {
	
		$sql = "SELECT id, valid FROM ". self::TABLENAME . "
				WHERE username = '$this->username'
				AND password = '$this->password'";

		$db = new Database();
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

		// Salvam in proprietati 
		$this->setId($result['id']);
		$this->setValid($result['valid']);
		
		return $result; 
	}

	public function displayAll() {
    	
    	echo "<table border=1>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Username</th>";
		echo "<th>Password</th>";
		echo "<th>Email</th>";
		echo "<th>Valid</th>";
		echo "<th>Valideaza/Invalideaza</th>";
		echo "<th>Actiuni</th>";
		echo "</tr>";

		$nr = 1;
		foreach($this->findAll() as $k => $utilizator){ //parcugem arrayul pe linie
			echo "<tr>";

			echo "<td> " . $utilizator["id"] . "</td>";
			echo "<td> " . $utilizator["username"] . "</td>";
			echo "<td> " . $utilizator["password"] . "</td>";
			echo "<td> " . $utilizator["email"] . "</td>";

			if($utilizator['valid']==1) {
				echo "<td> activ  </td>";
			} else {
				echo "<td> inactiv </td>"; 
			}

			if($utilizator['valid']==0) {
				echo "<td>";
					echo "<a href='tema4_activeaza.php?id=" . $utilizator["id"] . "'>Activeaza</a> ";
				echo "</td>";
			} else {
				echo "<td>";
				echo "<a href='tema4_dezactiveaza.php?id=" . $utilizator["id"] . "'>Dezactiveaza</a>";
				echo "</td>";
			}
			
			echo "<td>
				<a href='tema4_formular_editeaza_utilizatori.php?id=" . $utilizator["id"] . "'>Editeaza</a> |   
				<a href='tema4_sterge_utilizatori.php?id=" . $utilizator["id"] . "'>Sterge</a>
			  </td>";
			
			echo "</tr>";
		}

		echo "</table>";
		$nr++;
    }


    public function valideaza($id){
    	
		$this->findOneById($id);
		$this->setValid(1);
		$this->update();
		
    }

    public function invalideaza($id){
    	
		$this->findOneById($id);
		$this->setValid(0);
		$this->update();
		
    }
}

