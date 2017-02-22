<?php

session_start();

$_SESSION['tabel_linia_1'] = [4, 5, 7, 9];
$_SESSION['tabel_linia_2']= [3, 4, 6, 8];

$_SESSION['tabel'] = [$_SESSION['tabel_linia_1'], $_SESSION['tabel_linia_2']];

echo "<table border=1>";

 foreach ($_SESSION['tabel'] as $k=>$leguma) {
 	echo "<tr>";
 		echo "<td>".$leguma[0] ."</td>";
 		echo "<td>".$leguma[1] ."</td>";
 		echo "<td>".$leguma[2] ."</td>";
 		echo "<td>".$leguma[3] ."</td>";
 	echo "<tr>";
 }
 echo "</table>";