<?php

// Actulizare	fructe

require "classes/Fruit.php";

$fruit = new Fruit();

// Cautam un fruct dupa id 
$fruit->findOneById(23);
// $fruit->setNume("Zmeura Gustoasa");
$fruit->setProvenienta("Spania");

$fruit->update();

echo $fruit->getNume();