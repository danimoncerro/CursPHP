<?php

include 'tem7_valori_zmeur.php';


// $i este indexul si $value este valoare
echo "<table border=1>";
echo "<tr>
		<th>Nr.</th>
		<th>Soiuri Floricane</th>
		<th>Soiuri Primocane</th>
	</tr>";


foreach ($zmeura as $i => $value) {
	$nrCrt = $i + 1;

	echo "<tr>";
		echo "<td>" . $nrCrt . "</td>";

		// $value este array
		foreach ($value as $k => $v) {
			echo "<td>" . $v . "</td>";
		}

	echo "</tr>";
}

echo "</table>";



