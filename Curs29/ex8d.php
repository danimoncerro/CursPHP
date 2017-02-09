<?php


// Varianta procedurala ( cu functii ) 

define("DISCOUNT", 0.90);

function getPriceWithDiscount($price) {
		return $price * DISCOUNT;
}	

echo getPriceWithDiscount(5869) . "<br>";

echo getPriceWithDiscount(100) . "<br>";

echo getPriceWithDiscount(200) . "<br>";


// la final: 1 singur obiect, d obiectul Product se creeaza o singura data. 