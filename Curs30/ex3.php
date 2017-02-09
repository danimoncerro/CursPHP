<?php

// Interface -> ( este un "contract" )
// toate metodele trebuie sa fie definite

interface AutoBasic {

	public function startEngine();
	public function drive();
	public function stopEngine();

}

interface Auto extends AutoBasic {
	public function horn();
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

	public function horn() {
		echo "Horning <br>";
	}
}

$ford = new Ford();
$ford->startEngine();
$ford->drive();
$ford->horn();
$ford->stopEngine();