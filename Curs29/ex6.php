<?php


class Product {

	protected $price = 10;
	protected $stock = 24;


	public function __construct($_price, $_stock) {
		$this->price = $_price;
		$this->stock = $_stock;
	}

	// returneaza numarul de bucati 
	public function getStock() {
		return $this->stock; 
	}

	// returneaza o informatie generala despre stock in format text pentru utilizator
	public function getStockInformation() {
		if ($this->stock > 2 ) {
			return "In stoc";
		} elseif ( $this->stock > 0 && $this->stock <= 2 ) {
			return "Stoc limitat";
		} else {
			return "Nu mai este in stoc";
		}
	}


}


$product = new Product(10, 24); 
echo $product->getStockInformation(); // In stoc
echo '<hr>';

$product = new Product(10, 1); 
echo $product->getStockInformation(); // stoc limitat
echo '<hr>';

$product = new Product(10, 0); 
echo $product->getStockInformation(); // nu mai este in stoc
echo '<hr>';


