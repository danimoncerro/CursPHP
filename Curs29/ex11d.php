<?php


// Varianta recomandata / eleganta 

class Product {

	// !!!!!!!!!!!!!!!!!!!!!!!!111
	// const TVA = 1.19;    self::TVA
	// protected static $value = 3;   static::$value
	// protected $price = 100;      $this->price     ( !! nu putem folosi in metode statice )

	const STOCK = 3;  
	protected static $value = 3;
	protected $price = 100;


	public function getInfo() {
		return "Stock: " . self::STOCK . "<br>Value = " . static::$value . "<br>Price = " . $this->price;
	}

	static public function getStaticInfo() {
				return "Stock: " . self::STOCK . "<br>Value = " . static::$value ;
	}


}

$product = new Product();
echo $product->getInfo();

echo "<hr>";
echo Product::getStaticInfo();