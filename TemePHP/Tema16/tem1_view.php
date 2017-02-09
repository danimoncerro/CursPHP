<?php

include 'tem1_valori.php';

?>

<table border=3 width=700>

<tr>
	<th>Clase</th>
	<th>Elev1</th>
	<th>Elev2</th>
	<th>Elev3</th>
	<th>Elev4</th>
</tr>

<?php
foreach ($clase as $k=>$v){
	echo "<tr>";
	echo "<td>$k</td>";
		foreach ($v as $valoare) {
			echo "<td>$valoare</td>";
		}
	echo "</tr>";
}
?>

</table>