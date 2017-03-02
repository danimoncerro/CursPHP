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

		$sql = "SELECT * FROM ". self::TABLENAME . "
				WHERE id = $_id ";

		$stmt = $this->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		foreach ($result as $k=>$leguma) {

		$_SESSION['cart1'][$_id] = [
			"id" => $_id,
			"denumire" => $leguma['denumire'],
			"pret"	 => $leguma["pret"],
			"cantitate" =>  $_cantitate,
			
		];

		}
				
	}

	public function display() {

		?>
		<form action="actualizare_cos.php" method="GET">
		<?php
		echo "<table border=1>";
    		echo "<tr>"; 
    			echo "<th>Id</th>";
    			echo "<th>Denumire</th>";
    			echo "<th>Lei/kg</th>";
    			echo "<th>Cantitatea</th>";
    			echo "<th>Actiuni</th>";
    		echo "</tr>";
    	
    	$_id1 = 1;

    	if(isset($_SESSION['cart1'])) {
    		$result = $_SESSION['cart1'];
    	
    		foreach ($result as $k=>$leguma) {
    		
    			echo "<tr>";
    				echo "<td>" . $_id1 . "</td>"; 
    				echo "<td>" . $leguma['denumire'] . "</td>";
    				echo "<td>" . $leguma['pret'] . "</td>";
    		?>
    				<td>
			  			<input type="hidden" name="id[]" value="<?php echo $leguma["id"] ?>" >
	                  	<input type="number" name="cantitate[]" min="1" max="500" value="<?php echo $leguma['cantitate']; ?>">
			  		
				  	</td>
							
    				<td>
				  		<a href="stergere_produs.php?id=<?php echo $leguma["id"]; ?>" class="btn btn-sm btn-danger">Sterge</a>
			  		</td>

  			<?php

				echo "</tr>";
					$_id1++;
    		} 
    	} else {
    		echo "<h3>Cosul tau este gol</h3>";
    	}

    	echo "</table>";

    	?>
    	<br>
    	<input type="submit" name="submit" value="Actualizare cos">
		</form>

		<?php
    	
    }

	public function deleteProduct($id) {
		
		unset($_SESSION['cart1'][$id]);
		$_SESSION['message'] = "Produsul a fost sters din cos";

	}

	public function golireCos() {
		
		session_destroy();
		header("Location: start.php");
	}


	/**
	 * Actualizeaza cosul 
	 *
	 * @param array $ids - contine idurile produselor 
	 * @param array $cantitati - contine cantitatile produselor 
	 *
	 * @return void
	 */ 
	public function actualizare(array $ids, array $cantitati){
		
		for ($i = 0; $i < count($ids); $i++) {
			$id_product = $ids[$i];
			
			$cart = $_SESSION['cart1'];
			$cart[$id_product]["cantitate"] = $cantitati[$i];
			$_SESSION['cart1'] = $cart;
		}

	}


}