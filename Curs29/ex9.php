<?php


// Varianta recomandata / eleganta 

class Product {

	const DISCOUNT = 0.90; // constanta in interiorul clasei ... "se considera un element static "

	protected static $value = 3;  // este proprietate globala

	// In functii statice nu putem folosi $this, doar self
	static public function getPriceWithDiscount($price) {
		return $price * self::DISCOUNT + self::$value;
	}

	static public function setValue($_value) {
		self::$value = $_value;
	}


}


Product::setValue(5);
echo Product::getPriceWithDiscount(100) . "<br>"; //93

echo Product::getPriceWithDiscount(200) . "<br>"; // 183


// la final: 1 singur obiect, d obiectul Product se creeaza o singura data. 