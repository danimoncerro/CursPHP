<?php

include_once 'connect.php';

// Step2. Scriem sql query 
$sql = "SELECT * FROM users 
		LIMIT 100";

// Step3. Executam sql query si salvam rezultate in $result. 
$result = mysqli_query($conn, $sql);

$nr_result = mysqli_num_rows($result);

echo "Am gasit $nr_result rezultate pentru queryul: " . $sql . "<hr>";

echo '<table border=1>';
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id']; // 'id' este numele coloanei
	$username = $row['username']; // 'username' este numele coloanei
	$email = $row['email'];

	echo '<tr>';

		echo "<td>$id</td>";
		echo "<td>$username</td>";
		echo "<td>$email</td>";

	echo '</tr>';

}
echo '</table>';