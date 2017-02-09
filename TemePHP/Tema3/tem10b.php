<?php

$user = [
	'numele' => 'Costel',
	'varsta' => '38',
	'orasul' => 'Brasov'
];

$user2 = array_values($user);

for($i=0; $i<count($user2); $i++) {
	echo $i." : ".$user2[$i]."<br>";
}
