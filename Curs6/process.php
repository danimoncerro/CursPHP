<?php

// Daca a fost apasat butonul cu numele submit
if (isset($_POST['submit'])) {

 	 // Daca a fost selectat un element care are numele language[]
	if (isset($_POST['language'])) {
		$language = $_POST['language'];
		// if (!empty($language)) {
		// if (count($language) > 0)
		foreach($language as $limbaj){
			echo $limbaj . ",";
		}
	}

	if (isset($_POST['city'])){
		$city = $_POST['city'];
		foreach($city as $oras){
			echo $oras . ",";
		}	
	}
	

} else {
	echo "Do not hack me :)";
}


/*
Exemple not empty 

$a = "";
empty($a); // true
!empty($a); //false = !true

$b = array();
empty($b); // true
!empty($b); // false



*/