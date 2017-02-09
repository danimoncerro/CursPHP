<?php

require "classes/Fruit.php";

$fruit = new Fruit();

$item = $fruit->findOneById(18);

echo "<pre>";var_dump($item);
