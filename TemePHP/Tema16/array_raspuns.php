<?php


// Array pe 3 nivele
$tabele = [
	'users' => [
		'user1' => [
			'id' => 3
		]
	],
	'products' => [
		'product1' => [
			'id' => 3
		]
	],

]; 


// Nu lucram cu arrayuri pe 3 nivele, ci le separam cand vrem sa-l folosim

// Array bidimensional - 2 nivele
$users = $tabele['users']; 

// Array bidimensional - 2 nivele
$products = $tabele['products'];
