<?php


// verificam daca a fost apasat butonul submit 
if (isset($_GET['submit'])) {
	// verificam daca avem paramul cu numele age in url 
	if (isset($_GET['age'])) {
		$age = $_GET['age'];

		if ($age>=18) {
			echo "Aveti dreptul la concurs";
		} else {
			echo "<style>
div.cities {
    background-color:black;
    text-align:center;
    color:white;
    width:200px;
    margin:20px;
    padding:10px;
} 
</style>

<div class='cities'>
<h2>Atentie !</h2>
<p>Trebuie sa aveti 18 ani pentru a putea participa la acest concurs.</p>
</div>";
		}

	} else {
		echo "Nu ati definit varsta";
	}

}

?>


<form action="tema2.php"
.php" method="get">

<input type="text" placeholder="Introdu varsta" name="age">

<input type="submit" name="submit" value="Verifica varsta">
</form>