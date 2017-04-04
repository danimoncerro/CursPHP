<?php




class Product {

	const DISCOUNT = 0.90; // constanta in interiorul clasei ... "se considera un element static "

	
	public function getPriceWithDiscount($price) {
		return $price * self::DISCOUNT;
	}


}

$product = new Product(); 
echo $product->getPriceWithDiscount(5869) . "<br>";

$product = new Product(); 
echo $product->getPriceWithDiscount(100) . "<br>";


$product = new Product(); 
echo $product->getPriceWithDiscount(200) . "<br>";


// la final: 1 singur obiect, dar obiectul Product se creeaza de 3 ori.