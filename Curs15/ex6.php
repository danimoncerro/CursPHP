<?php

//verifica daca fost actionat butonul calculeaza din formular

if(isset($_POST["submit"])) {
	$pret = $_POST["price"];

	if($pret == 0) {
		echo "Pretul trebuie sa fie mai mare decat 0";
		exit;
	}
	echo "TVA = " . calculeaza_tva($pret);
}

function calculeaza_tva($pret) {
	$tva = $pret * 0.2;
	return $tva;
}


