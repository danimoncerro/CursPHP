<?php

$users = [
	'user1' => [
		'username' => 'vlad',
		'age' => 26,
	],
	'user2' => [
		'username' => 'emil',
		'age' => 30,
	]

];

echo "<table border=1 width=600>";

echo "<tr>";
echo "<th> username </th>";
echo "<th> age </th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $users['user1']['username'] . "</td>";
echo "<td>" . $users['user1']['age'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $users['user2']['username'] . "</td>";
echo "<td>" . $users['user2']['age'] . "</td>";
echo "</tr>";

echo "</table>";

