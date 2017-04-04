<?php

// Actulizare	Bulk : toate fructele

require "classes/Fruit.php";

$fruit = new Fruit();

foreach ($fruit->findAll()  as $row) {
	$id = $row['id'];

	// Caut fructul dupa id
	$fruit->findOneById($id);
	$fruit->setGust('acru');
	$fruit->update();
}

echo 'bulk updte end';