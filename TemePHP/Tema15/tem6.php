<?php

if(isset($_POST["pret_achizitie"])){
	
	$a = $_POST["pret_achizitie"];
	function calculeaza_adaosul_comercial($a){
		$x = $a * 0.5;
		return $x;
	}
}

echo "Adaos comercial = " . calculeaza_adaosul_comercial($a) . "<br>";

