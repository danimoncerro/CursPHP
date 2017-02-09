<?php

require "classes/Fruit.php";

$id = $_GET['id'];

$fruit = new Fruit();
$fruit->findOneById($id);

echo $fruit->getNume();
// echo "<pre>";var_dump($item);
