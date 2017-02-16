<?php 


class Cart {

	const PRODUCTS_TABLENAME = "products"; 

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


	public function add($id_product, $cantitate = 1) {

		$sql = "SELECT products.*, culori.culoarea
			FROM products
			LEFT JOIN culori on products.culoare=culori.id
			WHERE products.id = $id_product";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$product  = $result[0]; // primul element - este singurul element pt ca am cautat dupa id unic.
	

		// 2. Adauga in cos 
		$_SESSION['cart'][$id_product] = [
			"id" => $id_product,
			"title" => $product["tip"],
			"soi"	 => $product["soi"],
			"culoare" =>  $product["culoarea"],
			"pret" => $product["pret"],
			"cantitate" => $cantitate,
		];
		
	}

	// Get cart object with all products 
	public function get() {
		return $_SESSION['cart']; 
	}

	// Remove product by id from cart
	public function remove($id_product) {
		unset($_SESSION['cart'][$id_product]);
	}


	// Calculeaza totalul 
	// total = total + pret * cantitate
	public function priceTotal() {

		$total = 0;
		if(isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $item) {
				$total += $item['pret'] * $item['cantitate'];
			}
		} 

		return $total;
	}

	// Returneaza nr de produse in cos 
	public function count() {
		if (isset($_SESSION['cart'])) {
			return count($_SESSION['cart']);	
		}

		return 0;
	}
	

	// Actualizeaza un produs in cos 
	public function updateProduct($id_product, $cantitate = 1) {
		
		// Pas1: Citim cart-ul din sesiune
		$cart = $_SESSION['cart'];

		// Pas2: Modificam cantitatea pentru produsul selectat
		$cart[$id_product]['cantitate'] = $cantitate;

		// Pas3: Scriem in sesiune noul cart . 
		$_SESSION['cart'] = $cart; 
	}

}