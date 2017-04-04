<?php

$user = [
	'numele' => 'Costel',
	'varsta' => '38',
	'orasul' => 'Brasov'
];

foreach($user as $index=>$users) {
	echo $index ." = ".$users . "<br>";
}
$nr_elemente = count($user);
echo "<hr>";
echo $nr_elemente;