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

?> 
<table border=1 width=600>

<tr>
	<th> username </th>
	<th> age </th>
</tr>

<tr>
	<td><?php echo  $users['user1']['username'] ?></td>
	<td><?php echo  $users['user1']['age']  ?></td>
</tr>

<tr>
	<td><?php echo $users['user2']['username'] ?></td>
	<td><?php echo $users['user2']['age'] ?></td>
</tr>

</table>

