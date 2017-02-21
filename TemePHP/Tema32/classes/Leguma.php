<?php

class Leguma {

	const TABLENAME = "legume";
	protected $id = "";
	protected $denumire = "";
	protected $pret = ""; 
	protected $conn = false ;

	public function __construct() {
		$db = new Database();
		$this->conn = $db->getConnection();
	}

	protected function getConnection() {
    	return $this->conn;
    }

    public function findAll() {
    	
    	$sql = "SELECT * FROM ". self::TABLENAME . "";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->execute();
    	$result = $stmt->fetchAll();

    	echo "<table border=1>";
    		echo "<tr>"; 
    			echo "<th>Id</th>";
    			echo "<th>Denumire</th>";
    			echo "<th>Lei/kg</th>";
    			echo "<th>Actiuni</th>";
    		echo "</tr>";
    		

    	foreach ($result as $k=>$leguma) {
    		echo "<tr>";
    			echo "<td>" . $leguma['id'] . "</td>";
    			echo "<td>" . $leguma['denumire'] . "</td>";
    			echo "<td>" . $leguma['pret'] . "</td>";
    			echo "<td>";
				?>
					<form action="add_to_cart.php" method="GET">
                 		<input type="hidden" value="<?php echo $leguma['id'] ?>" name="id">
                  		<input type="number" name="cantitate" min="1" max="500" value="1">
                		<input type="submit" value="Adauga in cos">
                	</form>
  				<?php 
  				echo "</td>";
			echo "</tr>";
    		
    	}

    	echo "</table>";
    }

}