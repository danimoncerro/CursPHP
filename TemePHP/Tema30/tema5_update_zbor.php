<?php

require_once 'classes/Orar.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$ora_aterizare = $_POST['ora'];
	$de_la = $_POST['de_la'];
	$compania = $_POST['compania'];

	$zbor = new OrarSosiri();

	$zbor->setOraAterizare($ora_aterizare);
	$zbor->setDeLa($de_la);
	$zbor->setCompania($compania);
	$zbor->setId($id);

	$zbor->update();
	

// Adaugare link pentru vizualizare orar plecari

}

?>

<br>
<a href="tema5_orar_sosiri_utilizatori.php">Vizualizare orar sosiri</a>

</body>
</html>