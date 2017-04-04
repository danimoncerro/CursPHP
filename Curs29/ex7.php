<?php




class Product {

	const VAT = 1.19; // constanta in interiorul clasei ... "se considera un element static "

	
	public function getPriceWithVat($price) {
		return $price * self::VAT;
	}


}

$product = new Product(); 

echo $product->getPriceWithVat(100);