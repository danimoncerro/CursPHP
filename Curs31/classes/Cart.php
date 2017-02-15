<?php 

require_once 'Database.php';

class Cart {

	const TABLENAME = "products"; 
	protected $id = 0;
	protected $tip = '';
	protected $soi = '';
	protected $culoare = '';
	protected $pret = 0;
	protected $cantitate = 0;
	protected $mycart;
	protected $conn = false ;
	protected $cart = [];

	public function __construct() {
		$db = new Database();
		$this->conn = $db->getConnection();
	}

	protected function getConnection() {
    	return $this->conn;
    }

    public function setId($_id) {
    	$this->id = $_id;
    }

    public function setCantitate ($_cantitate) {
    	$this->cantitate = $_cantitate;
    }


	public function add() {

		$sql = "SELECT products.*, culori.culoarea
			FROM products
			LEFT JOIN culori on products.culoare=culori.id
			WHERE products.id = $this->id";

		$stmt = $this->conn->prepare($sql);

		$stmt->execute();

		$result = $stmt->fetchAll();

		$product  = $result[0]; // primul element - este singurul element pt ca am cautat dupa id unic.

		

		// 2. Adauga in cos 
		$_SESSION['cart'][$this->id] = [
			"id" => $this->id,
			"title" => $product["tip"],
			"soi"	 => $product["soi"],
			"culoare" =>  $product["culoarea"],
			"pret" => $product["pret"],
			"cantitate" => $this->cantitate,
		];
		//echo "<pre>";
		//var_dump($_SESSION['cart'][$this->id]);
		//exit;
	}

	public function get() {
		$this->cart = $_SESSION['cart'][$this->id];
		echo "<br><br><br><br>";
		echo "Salut";
		//echo "<br>";
		//echo "<pre>";
		//var_dump($results);
		//exit;
		return $this->cart; 


	}

	public function remove() {

	}


	public function priceTotal() {

		if(isset($_SESSION['cart'])) {
			$this->mycart = $_SESSION['cart'];
			return count($this->mycart);
		} else {
			return 0;
		}
		
	}

	
}