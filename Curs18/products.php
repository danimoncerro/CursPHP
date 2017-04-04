<style>
table {
	width:800px;
	margin: 0 auto;
	border-collapse: collapse;
}

table th {
	padding: 20px;
	background-color: lightgray;
	border: 1px solid black;

}

table td {
	padding:20px;
	border: 1px solid black;

}

a {
	border: 1px solid gray;
	padding: 20px;
	background-color: lightgray;
	font-size: 16px;
	color: black;
	text-decoration: none;
}

a:hover {
	background-color: white;
	border: 1px solid orange;
}
</style>
<?php

// Includem conexiunea la baza de date
include 'connect.php';

// Definim SQL-ul
$sql = 'SELECT * FROM products
		ORDER BY id ASC';

// Pregateste SQL-ul final 
$stmt = $conn->prepare($sql);

// Executam SQL-ul
$stmt->execute();

// Citim rezultatele
// vom avea un array bidimensional . 
$products = $stmt->fetchAll();
?>
<br>
<a href="form_insert.php">Adauga produs.</a>
<br><br>

<?php
// Afisam $products cu dublu foreach 
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Tip</th>";
echo "<th>Culoare</th>";
echo "<th>Soi</th>";
echo "<th>Pret</th>";
echo "<th>Actiuni</th>";
echo "</tr>";

foreach($products as $k=>$product){ //parcugem arrayul pe linie
	$id = $product["id"];

	echo "<tr>";

	echo "<td> " . $id . "</td>";
	echo "<td> " . $product["tip"] . "</td>";
	echo "<td> " . $product["culoare"] . "</td>";
	echo "<td> " . $product["soi"] . "</td>";
	echo "<td> " . $product["pret"] . "</td>";
	echo "<td> 
			<a href='form_edit.php?id=" . $id . "'>Editeaza</a>  
			<a href='delete.php?id=" . $id . "'>Sterge</a>

		  </td>";

	echo "</tr>";
}

echo "</table>";