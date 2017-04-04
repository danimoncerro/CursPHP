<?php


class User {

	protected static $name = 'Daniel';

	static public function getSelfName() {
		return self::$name;
	}

	static public function getStaticName() {
		return static::$name;
	}

}


class Student extends User {
	protected static $name = 'Sandor';


}


echo User::getSelfName() . "<br>"; // Daniel
echo User::getStaticName() . "<br>"; // Daniel

echo "<hr>";
echo Student::getSelfName() . "<br>"; // Daniel
echo Student::getStaticName() . "<br>"; //Sandor


