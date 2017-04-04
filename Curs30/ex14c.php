<?php

// Actulizare	Bulk : toate fructele

require "classes/Fruit.php";

$fruit = new Fruit();

$i = 0;
foreach ($fruit->findAll()  as $row) {
	$id = $row['id'];
	$gust = (++$i % 2 == 0) ? 'acru' : 'dulce';


	// Caut fructul dupa id
	$fruit->findOneById($id);
	$fruit->setGust($gust);
	$fruit->update();
}

echo 'bulk updte end';