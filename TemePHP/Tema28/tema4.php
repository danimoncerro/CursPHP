<?php

include 'classes/Mar1.php';

$fruct = new Mar1();
$fruct->setNume('mar');
$fruct->setGust('dulce');
$fruct->setProvenienta('Ungaria');
// echo $fruct->getNume() . "<br>" . getGust() . "<br>" . getProvenienta();
echo $fruct->getNume();
echo "<br>";
echo $fruct->getGust();
echo "<br>";
echo $fruct->getProvenienta(); // Nu ar trebui sa genereze o eroare ?
