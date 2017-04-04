<?php

abstract class Fruct {
	public $nume;
	protected $gust;
	private $provenienta;

	abstract function setNume($nume);
	abstract function getNume();
	abstract function setGust($gust);
	abstract function getGust();
	abstract function setProvenienta($provenienta);
	abstract function getProvenienta();
}

class Mar extends Fruct {

	public function setNume($nume){
		$this->nume = $nume;
	}

	public function getNume(){
		return $this->nume;
	}

	public function setGust($gust){
		$this->gust = $gust;
	}

	public function getGust() {
		return $this->gust;
	}

	public function setProvenienta($provenienta) {
		$this->provenienta = $provenienta;
	}

	public function getProvenienta() {   
		return $this->provenienta;
	}
	// - explicare eroare ce inseamna :: ?
}

$fruct = new Mar();
$fruct->setNume('mar');
$fruct->setGust('acru');
$fruct->setProvenienta('Romania');

echo $fruct->getNume();
echo "<br>";
echo $fruct->getGust();
echo "<br>";
echo $fruct->getProvenienta();
