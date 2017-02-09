<?php

//include fisierul de conexiune la baza de date

include 'connect.php';

// include fisierul functions.php

include 'functions.php';

// atribuire valoare din url pentru id

$id = $_GET['id'];

// verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){
	$denumire_produs = $_POST['denumire_produs'];
	$data_achizitiei = $_POST['data_achizitiei'];
	$cantitate = $_POST['cantitate'];
	$pret_unitar = $_POST['pret_unitar'];
	$furnizor = $_POST['furnizor'];
}

// construire sql

$sql = "UPDATE stocuri
		SET denumire_produs='$denumire_produs',
			data_achizitiei='$data_achizitiei',
			cantitate=$cantitate,
			pret_unitar=$pret_unitar,
			furnizor='$furnizor'
		WHERE id=$id ";


// preparare sql

$stmt = $conn->prepare($sql);	

// executare sql

if ($stmt->execute()){
// mesaj de reusita
	echo "<p> Modificarea a avut loc cu succes. </p>";
} else {
	echo "A aparut o eroare.";
}

?>
<!-- link catre ... -->

<br>
<a href="stocuri.php">Vizualizare magazia virtuala</a>
