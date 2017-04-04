<?php 

// verificam daca avem paramul cu numele age in url 
if (isset($_GET['age'])) {
	$age = $_GET['age'];
	echo "<h2>Am $age de ani</h2>";

} else {
	echo "Trebuie sa avem un param in url cu numele: age";
}


