<?php

// Interface -> ( este un "contract" )
// toate metodele trebuie sa fie definite

interface Auto {

	public function startEngine();
	public function drive();
	public function stopEngine();

}

class Ford implements Auto {

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
$ford->drive();
$ford->stopEngine();