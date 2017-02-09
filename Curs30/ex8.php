<?php

require 'classes/Fruit.php';

$fruit = new Fruit();

// Setam proprietatile / valorile 
$fruit->setNume("nume test");
$fruit->setGust("gust test");
$fruit->setProvenienta("provenienta test");

// insereaza un record 
$fruit->save();

// citesc toate fructele 
$fruits = $fruit->findAll();


echo '<pre>';var_dump($fruits);