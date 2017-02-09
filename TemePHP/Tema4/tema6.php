<style>
	table tr:first-child td {
		font-weight: bold;
	    text-transform: uppercase;
	    padding: 8px;	
	}
</style>
<?php

$orar = [
	''      => ['Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata', 'Duminica'],
	'08-09' => ['Matematica', 'Engleza', 'Biologie', 'Istorie', 'Chimie', '-', '-'],
	'09-10' => ['Romana', 'Educatie Fizica', 'Franceza', 'Fizica', 'Desen', '-', '-'],
	'10-11' => ['Franceza', 'Engleza', 'Chimie', 'Fizica', 'Educatie Fizica', '-', '-'],
	'11-12' => ['Geografie', 'Istorie', 'Dirigintie', 'Geografie', 'Informatica', '-', '-']
];

echo "<table border='1' style='width:70%; text-align:center; background-color: gold;'>";

foreach ($orar as $ore => $zi) {
	
	echo "<tr>";
	echo "<td bgcolor='red'>";
	echo $ore;

	foreach ($zi as $ora) {
		echo "<td>";
		echo $ora;
		echo "</td>";
	}
	echo "</td>";
	echo "</tr>";  
}
echo "</table>";

