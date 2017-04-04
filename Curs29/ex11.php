<?php


// Varianta recomandata / eleganta 

class Product {


	protected static $value = 3;  // este proprietate globala



	static public function getValue() {
		return static::$value;
	}


}


echo Product::getValue(); // 3