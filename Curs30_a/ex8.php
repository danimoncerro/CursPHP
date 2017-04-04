<?php

require 'classes/Fruit.php';

$fruit = new Fruit();

// insereaza un record 
$fruit->insert("test", "test", "test");

// citesc toate fructele 
$fruits = $fruit->findAll();


echo '<pre>';var_dump($fruits);