<?php




class Product {

	protected $price = 10;

	// constante sunt variabile globale
	// define("STOCK", 24);
	const STOCK = 24; // in interioriul clasei, definire constanta


	public function getStock() {
		return self::STOCK; // constanta definita in aceasta clasa. 
	}

	public function getInventory() {
		// $stock = self::STOCK;
		// $price = $this->price;
		// return $stock * $price; 

		return $this->getStock() * $this->price;
	}


}

$product = new Product(); 
echo $product->getStock();
echo '<br>';
echo 'Valoare stock: ' . $product->getInventory();