<?php

// Abstract class -> ( doar metodele abstracte trebuie sa definim in clasa extinsa)


abstract class Auto {


	abstract public function startEngine();
	abstract public function drive();
	abstract public function stopEngine();

	public function horn() {
		echo "Horning <br>";
	}

}

class Ford extends Auto {

	public function startEngine(){
		echo "Start Engine <br>";
	}

	public function drive() {
		echo "I am driving<br>";
	}

	public function stopEngine(){
		echo "Stop Engine";
	}
}

$ford = new Ford();
$ford->startEngine();
$ford->horn();
$ford->drive();
$ford->stopEngine();