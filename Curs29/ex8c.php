<?php


// Varianta recomandata / eleganta 

class Product {

	const DISCOUNT = 0.90; // constanta in interiorul clasei ... "se considera un element static "

	
	public function getPriceWithDiscount($price) {
		return $price * self::DISCOUNT;
	}


}

$product = new Product(); 
echo $product->getPriceWithDiscount(5869) . "<br>";

echo $product->getPriceWithDiscount(100) . "<br>";

echo $product->getPriceWithDiscount(200) . "<br>";


// la final: 1 singur obiect, d obiectul Product se creeaza o singura data. 