<?php

$user = [
   'name' => 'VLad',
   'age' => 35,
   'email' => 'vlad@y.ro',
   'city' => 'bucuresti',
   'school' => 'liceu',
];


foreach ($user as $k => $v) {
	echo "$k: $v <br>";
}