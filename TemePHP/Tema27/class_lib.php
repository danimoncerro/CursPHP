<?php

class Legume {

	var $nume_leguma;

	function __construct($variabila) {
		$this->nume_leguma = $variabila;
	}

	function afiseaza_nume() {
		return $this->nume_leguma;
	}

}


