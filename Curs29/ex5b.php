<?php




class Product {


	protected $stock = 24; 

	public function getStock() {
		return $this->stock; 
	}


}

$product = new Product(); 
echo $product->getStock();