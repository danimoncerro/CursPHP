<?php




class Product {

	const DISCOUNT = 0.90; // constanta in interiorul clasei ... "se considera un element static "

	
	public function getPriceWithDiscount($price) {
		return $price * self::DISCOUNT;
	}


}

$product1 = new Product(); 
echo $product1->getPriceWithDiscount(5869) . "<br>";

$product2 = new Product(); 
echo $product2->getPriceWithDiscount(100) . "<br>";


$product3 = new Product(); 
echo $product3->getPriceWithDiscount(200) . "<br>";


// la final ai 3 obiecte care ocupa memorie :)