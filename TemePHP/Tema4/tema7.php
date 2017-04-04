<?php

$orar = [
	['','Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata', 'Duminica'],
	['08-09','Matematica', 'Engleza', 'Biologie', 'Istorie', 'Chimie', '-', '-'],
	['09-10','Romana', 'Educatie Fizica', 'Franceza', 'Fizica', 'Desen', '-', '-'],
	['10-11','Franceza', 'Engleza', 'Chimie', 'Fizica', 'Educatie Fizica', '-', '-'],
	['11-12','Geografie', 'Istorie', 'Dirigintie', 'Geografie', 'Informatica', '-', '-']
];

echo "<table border='1' style='width:70%; text-align:center; background-color: gold;'>";

for ($i = 0; $i < count($orar); $i++) {
	// prima linie
	if ($i == 0){
		echo "<tr bgcolor = 'grey'>";
	} else {
		echo "<tr>";
	}

	for ($j = 0; $j < count($orar[$i]); $j++ ) {

		if ($j == 0) {
			if ($i == 0) {
				echo "<th bgcolor='red'>";	  
			} else {
				echo "<td bgcolor='red'>";	  
			}
	    	
	    	echo $orar[$i][$j];

			if ($i == 0) {
				echo "</th>";	  
			} else {
				echo "</td>";	  
			}
	    	
			
		} else {
			if ($i == 0) {
				echo "<th>";	  
			} else {
				echo "<td>";	  
			}
	    	
	    	echo $orar[$i][$j];

			if ($i == 0) {
				echo "</th>";	  
			} else {
				echo "</td>";	  
			}

		}
	}
	echo "</tr>";  
	
}
echo "</table>";
