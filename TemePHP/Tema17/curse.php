<!DOCTYPE html>

<style>
table {
	width:700px;
	margin: 0 auto;
	border-collapse: collapse;
}

table th {
	padding: 15px;
	background-color: lightblue;
	color: black;
	border: 1px solid black;

}

table td {
	padding:15px;
	border: 1px solid black;
	color: red;
	text-align: center;
}

a {

	border: 1px solid gray;
	padding: 15px;
	background-color: lightgray;
	font-size: 16px;
	color: green;
	text-decoration: none;

}

a:hover {
	background-color: yellow;
	border: 1px solid orange;

}

a.center-new {
	display: block;
	margin: 0 auto;
	width: 100px;

}

h1 {
	text-align: center;
}

.center {
    text-align: center;
}

</style>

<?php

include 'connect.php';

$sql = "SELECT * FROM plecari
		ORDER BY id ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();

$curse = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<br><br>";
echo "<h1>ORAR PLECARI</h1>";
echo "<br><br>";
echo "<table border=2 width=500>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Ora decolare</th>";
echo "<th>Destinatia</th>";
echo "<th>Compania</th>";
echo "</tr>";

foreach($curse as $k=>$cursa){ 
	echo "<tr>";

	foreach ($cursa as $c => $valoare) {
		echo "<td>$valoare</td>";
	}

	echo "</tr>";
}

echo "</table>";

?>
<br><br>

<div class="center">
<a href="form_insert.html">Adauga curse</a>
</div>

<br><br>
<a href="form_insert.html" class="center-new">Adauga curse</a>


<br><br>

