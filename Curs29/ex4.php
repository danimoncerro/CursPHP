<?php

// constante sunt variabile globale
define("STOCK", 24);


class Product {


	public function getStock() {
		return STOCK;
	}


}

$product = new Product(); 
echo $product->getStock();