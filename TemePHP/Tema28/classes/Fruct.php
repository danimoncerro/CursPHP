<?php

class Fruct {
	public $nume;
	protected $gust;
	private $provenienta;

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
}