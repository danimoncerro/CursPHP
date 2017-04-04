<?php 

// verificam daca avem paramul cu numele age in url 
if (isset($_GET['age'])) {
	$age = $_GET['age'];

	if ($age>=18) {
		echo "Aveti dreptul la concurs";
	} else {
		echo "trebuie sa aveti 18 ani pt acest concurs";
	}

} else {
	echo "Nu ati definit varsta";
}


