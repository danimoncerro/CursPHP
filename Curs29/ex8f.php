<?php


// Varianta recomandata / eleganta 

class Product {

	const DISCOUNT = 0.90; // constanta in interiorul clasei ... "se considera un element static "

	protected static $value = 3;

	// In functii statice nu putem folosi $this, doar self
	static public function getPriceWithDiscount($price) {
		return $price * self::DISCOUNT + self::$value;
	}

	static public function setValue($_value) {
		self::$value = $_value;
	}


}



echo Product::getPriceWithDiscount(100) . "<br>";

echo Product::getPriceWithDiscount(200) . "<br>";


// la final: 1 singur obiect, d obiectul Product se creeaza o singura data. 