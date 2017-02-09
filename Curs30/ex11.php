<?php

require "classes/Fruit.php";

$id = $_GET['id'];

if (!$id) {
	$id = 18;
}


$fruit = new Fruit();
$fruit->findOneById($id);

echo $fruit->display();
// echo "<pre>";var_dump($item);
