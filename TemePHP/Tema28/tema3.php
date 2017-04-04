<?php

include 'classes/Mar.php';

$fruct = new Mar();
$fruct->setNume('mar');
$fruct->setGust('dulce');
$fruct->setProvenienta('Polonia');
// echo $fruct->getNume() . "<br>" . getGust() . "<br>" . getProvenienta();
echo $fruct->getNume();
echo "<br>";
echo $fruct->getGust();
echo "<br>";
echo $fruct->getProvenienta();