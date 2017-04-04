<?php


$tabel = [
	'user1' => [
			'age' => 34,
			'city' => 'Constanta',
		], 
	'user2' =>  [
			'age' => 28,
			'city' => 'Brasov',
		], 
	'user3' =>  [
			'age' => 38,
			'city' => 'Bucuresti',
		], 

];

foreach ($tabel as $i => $users) {
	echo "$i <br> ";
	foreach ($users as $k => $user) {

		echo "$k = $user <br>";
	}
}