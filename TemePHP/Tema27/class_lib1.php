<?php

/**
	exemple nume fisier: 
	class.Leguma.php
	classes/Leguma.php

	pt avansati: 
	libraries/Leguma.php
	model/Leguma.php

*/


/** nume clasa: singular **/
class Leguma {

	// var == public
	// se prefera public 
	public $nume = 'pastarnac';

	// implicit sunt publice
	// naming: camelCase 
	function afiseazaNume() {

			echo $this->nume;

	}
}