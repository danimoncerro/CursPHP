<?php 
// Afisam valoarile unui array bidimensional in mod dinamic
echo "<table border=1 width=600>";

echo "<tr>";
	echo "<th> Nota 1 </th>";
	echo "<th> Nota 2 </th>";
	echo "<th> Nota 3 </th>";
	echo "<th> Nota 4 </th>";
	echo "<th> Nota 5 </th>";
echo "</tr>";


foreach ($note as $nota) {
	echo "<tr>";
	foreach($nota as $v) {
		echo "<td>$v</td>";
	}
	echo "</tr>";
}

echo "</table>";

