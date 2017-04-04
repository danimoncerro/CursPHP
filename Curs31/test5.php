<?php

//session_start();
//$_SESSION['mesaj2'] = 'Salut2';

class Sesiune {

	//public $start = session_start();
	
	//protected $sesiune = $_SESSION['mesaj'];

	public function afiseaza() {
		$_SESSION['mesajul5'] = 'Salut5';
		echo $_SESSION['mesajul5'];
		echo "<br>";
		echo $_SESSION['mesaj'];
	}
}