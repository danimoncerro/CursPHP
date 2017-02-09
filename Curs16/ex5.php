<?php

$users = [
	'user1' => [
		'username' => 'vlad',
		'age' => 26,
	],
	'user2' => [
		'username' => 'emil',
		'age' => 30,
	],
	'user3' => [
		'username' => 'iancu',
		'age' => 18,
	],


];

echo "<table border=1 width=600>";

echo "<tr>";
echo "<th> username </th>";
echo "<th> age </th>";
echo "</tr>";

// Citim dinamic valorile 
foreach($users as $k=>$user) {
	echo "<tr>";
	foreach($user as $m=>$v) {
		echo "<td>";
		echo $v;
		echo "</td>";
	}
	echo "</tr>";
}



echo "</table>";

