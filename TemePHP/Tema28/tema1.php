<?php

include  'classes/Fruct.php'; 
//require 'classes/Fruct2.php'; // exit; daca nu exista fisierul respectiv.

$fruct = new Fruct();
$fruct->setNume('mar');
$fruct->setGust('dulce');
$fruct->setProvenienta('Polonia');
// echo $fruct->getNume() . "<br>" . $fruct->getGust() . "<br>" . $fruct->getProvenienta();
echo $fruct->getNume();
echo "<br>";
echo $fruct->getGust();
echo "<br>";
echo $fruct->getProvenienta();
