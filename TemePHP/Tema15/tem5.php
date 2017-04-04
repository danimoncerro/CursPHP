<?php

if(!isset($_GET["pret_achizitie"])){
	echo "Nu ati introdus pretul.";
}
$a = $_GET["pret_achizitie"];
echo "Pret achizitie = $a <br>";


function calculeaza_adaosul_comercial($a){
	$x = $a * 0.5;
	return $x;
}

echo "Adaos comercial = " . calculeaza_adaosul_comercial($a) . "<br>";

