<?php

$user = [
   'name' => 'VLad',
   'age' => 35,
   'email' => 'vlad@y.ro',
   'city' => 'bucuresti',
   'school' => 'liceu',
];



$user2 = array_values($user);

/*

$user2 = [
   0 => 'VLad',
   1 => 35,
   2 => 'vlad@y.ro',
   3 => 'bucuresti',
   4 => 'liceu',
];

*/



for ($i=0; $i<count($user); $i++) {
	echo $i . ': ' .$user2[$i] . '<br>';
}


