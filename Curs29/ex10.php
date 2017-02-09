<?php

$value = 3;

function setValue($_value) {
	return $value = $_value;
}



function getPriceWithDiscount($price) {
	global $value;
	return $price * 0.9 + $value;
}


setValue(5);
echo getPriceWithDiscount(100) . "<br>"; //93

echo getPriceWithDiscount(200) . "<br>"; // 183


// la final: 1 singur obiect, d obiectul Product se creeaza o singura data. 