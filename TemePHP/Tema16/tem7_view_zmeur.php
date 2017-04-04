<?php

include 'tem7_valori_zmeur.php';

?>

<table border=2 width 500>
	<tr>
		<th>Nr.</th>
		<th>Soiuri Floricane</th>
		<th>Soiuri Primocane</th>
	</tr>

<?php

foreach ($zmeura as $soiuri=>$k) {
	echo "<tr>";
	echo "<td>$soiuri</td>";

	foreach ($k as $v) {
		echo "<td>$v</td>";
	}

	echo "</tr>";
	
}

?>
</table>

