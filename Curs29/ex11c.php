<?php


// Varianta recomandata / eleganta 

class Product {

	// !!!!!!!!!!!!!!!!!!!!!!!!111
	// const TVA = 1.19;    self::TVA
	// protected static $value = 3;   static::$value
	// protected $price = 100;      $this->price     ( !! nu putem folosi in metode statice )

	const STOCK = 3;  



	static public function getStock() {
		return static::STOCK;
	}


}


echo Product::getStock(); // 3