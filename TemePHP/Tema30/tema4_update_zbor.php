<?php

require_once 'classes/Orar.php';

// Verificam daca a fost actionat butonul Editeaza

if(isset($_POST['submit'])){

// Initializare variabile cu datele care vor fi modificate

	$id = $_GET['id'];

	$ora_decolare = $_POST['ora'];
	$destinatia = $_POST['destinatia'];
	$compania = $_POST['compania'];

	$zbor = new OrarPlecari();

	$zbor->setOraDecolare($ora_decolare);
	$zbor->setDestinatia($destinatia);
	$zbor->setCompania($compania);
	$zbor->setId($id);

	$zbor->update();
	

// Adaugare link pentru vizualizare orar plecari

}

?>

<br>
<a href="tema4_orar_plecari_utilizatori.php">Vizualizare orar plecari</a>

</body>
</html>