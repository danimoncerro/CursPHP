<?php


// Definitii 
// Clasa - logical format / colecite de functii si variabile in contextul clasei definite 
// Obiect - clasa initializata 

// De stiut: 
// Procedural        | OOP
// variabila         = proprietate 
// functie           = metoda 

class Tabel {

	var $tabel = '';
	var $column = '';

	// Metoda magica de construct ( metodele magice incep cu __ )
	// Se apeleaza automat la crearea obiectului 
	function __construct() {
		// $this este obiectul curent / initializat 
		$this->tabel = 'localitate';
		$this->column = 'name';


	}


	// Afisarea proprietatilor 
	function afiseaza() {

		echo $this->tabel;
		echo '<br>';
		echo $this->column;

		echo '<hr>';
	}


	// Afiseaza un mesaj
	function mesaj($nume = 'Alex') {
		echo "Salut $nume!";
	}
}