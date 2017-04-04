<?php

$orar = [
	['08-09','Matematica', 'Engleza', 'Biologie', 'Istorie', 'Chimie', '-', '-'],
	['09-10','Romana', 'Educatie Fizica', 'Franceza', 'Fizica', 'Desen', '-', '-'],
	['10-11','Franceza', 'Engleza', 'Chimie', 'Fizica', 'Educatie Fizica', '-', '-'],
	['11-12','Geografie', 'Istorie', 'Dirigintie', 'Geografie', 'Informatica', '-', '-']
];

// Antet tabela
echo "<table border='1' style='width:70%; text-align:center; background-color: gold;'>";
echo "<tr>";
	echo "<th bgcolor='grey'></th>"; 
	echo "<th bgcolor='grey'>Luni</th>"; 
	echo "<th bgcolor='grey'>Marti</th>"; 
	echo "<th bgcolor='grey'>Miercuri</th>"; 
	echo "<th bgcolor='grey'>Joi</th>"; 
	echo "<th bgcolor='grey'>Vineri</th>"; 
	echo "<th bgcolor='grey'>Sambata</th>"; 
	echo "<th bgcolor='grey'>Duminica</th>";
echo "</tr>";

// Continutul tabelei
for ($i = 0; $i < count($orar); $i++) {
	echo "<tr>";

	for ($j = 0; $j < count($orar[$i]); $j++ ) {
			if ($j == 0) {
				echo "<td bgcolor='red'>";	    	
			} else {
				echo "<td>";	    	
			}
	    	echo $orar[$i][$j];
			echo "</td>";
		
	}
	echo "</tr>";  
}
echo "</table>";


