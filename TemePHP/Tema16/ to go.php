<?php

if(!isset($_COOKIE["contor"])){
         setcookie["contor"] = 1;
         echo "Ati accesat pagina de 1 ori.";
} else {
	$_COOKIE["contor"]++;
	echo "Ati accesat pagina de " . $_COOKIE["contor"] . " ori.";
}
