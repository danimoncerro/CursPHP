<?php

$note = [
	[7, 8, 10, 5, 3],
	[5, 9, 2, 9, 5],
	[4, 3, 2, 6, 8],
	[7, 8, 10, 5, 3],
	[5, 9, 2, 9, 5],
	[4, 3, 2, 6, 8]		
];



echo "<table border=1 width=600>";

echo "<tr>";
echo "<th> Nota 1 </th>";
echo "<th> Nota 2 </th>";
echo "<th> Nota 3 </th>";
echo "<th> Nota 4 </th>";
echo "<th> Nota 5 </th>";
echo "</tr>";


foreach ($note as $m) {
	echo "<tr>";
	foreach($m as $v) {
		echo "<td>";
		echo $v;
		echo "</td>";
	}
	echo "</tr>";
}


echo "</table>";

