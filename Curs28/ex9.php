<?php


// nu se pot crea obiecte
abstract class User {

	protected $age = '';

	public function setAge($_age) {
		$this->age = $_age;
	}

	// metoda trebuie definita in clasa extinsa 
	abstract public function checkMinimumAge();

}


class Pupil extends User {
	public function checkMinimumAge() {
		if ($this->age >= 14) {
			echo 'totul okay';
		}else {
			echo 'Varsta minima trebuie sa fie 14';
		}
	}
}

class Drive extends User {
	public function checkMinimumAge() {
		if ($this->age >= 18) {
			echo 'totul okay';
		}else {
			echo 'Varsta minima trebuie sa fie 18';
		}
	}
}


class DriveMoto extends User {
	public function checkMinimumAge() {
		if ($this->age >= 21) {
			echo 'totul okay';
		}else {
			echo 'Varsta minima trebuie sa fie 21';
		}
	}
}

$user = new Pupil();
$user->setAge(15);
$user->checkMinimumAge();

echo '<hr>';

$motoDriver = new DriveMoto();
$motoDriver->setAge(21);
$motoDriver->checkMinimumAge();