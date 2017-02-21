<?php

class Cart {

	const TABLENAME = 'legume';
	protected $id = "";
	protected $cantitate = "";
	protected $cart = "";
	protected $conn = false;

	public function __construct() {
		$db = new Database();
		$this->conn = $db->getConnection();
	}

	public function getConnection(){
		return $this->conn;
	}

	public function add($_id, $_cantitate) {
		$_SESSION['id'] = $_id;
		$_SESSION['cantitate'] = $_cantitate;

		$_SESSION['cart'][$id_product] = [
			"id" => $id_product,
			"title" => $product["tip"],
			"soi"	 => $product["soi"],
			"culoare" =>  $product["culoarea"],
			"pret" => $product["pret"],
			"cantitate" => $cantitate,
		];

		
				
	}

	public function display() {
		$this->id = $_SESSION['id'];
		$this->cantitate = $_SESSION['cantitate'];

		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $this->id ";

		$stmt = $this->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
						
		echo "<table border=1>";
    		echo "<tr>"; 
    			echo "<th>Id</th>";
    			echo "<th>Denumire</th>";
    			echo "<th>Lei/kg</th>";
    			echo "<th>Cantitatea</th>";
    			echo "<th>Actiuni</th>";
    		echo "</tr>";
    	
    	$_id = 1;

    	foreach ($result as $k=>$leguma) {
    		
    		echo "<tr>";
    			echo "<td>" . $_id . "</td>";
    			echo "<td>" . $leguma['denumire'] . "</td>";
    			echo "<td>" . $leguma['pret'] . "</td>";
    		?>
    			<td>

			  		<input type="hidden" value="<?php echo $produs["id"] ?>" name="id[]">
                  	<input type="number" name="cantitate[]" min="1" max="500" value="<?php echo $this->cantitate; ?>">
			  		
			  	</td>
							
    			<td>
			  		<a href="sterge_produs.php?id=<?php echo $produs["id"]; ?>" class="btn btn-sm btn-danger">Sterge</a>
			  	</td>

  			<?php

			echo "</tr>";
				$_id++;
    		
    	}

    	echo "</table>";
		
	}

}