<?php


// Varianta recomandata / eleganta 
class User {

	protected static $name = 'Daniel';
}


class Student extends User {
	protected static $name = 'Sandor';


	static public function getName() {
		return self::$name;
	}

}


echo Student::getName();