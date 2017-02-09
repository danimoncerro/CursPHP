<?php

function listeaza($tabel, $column){
	global $conn;

	$sql = "SELECT *
	        FROM $tabel";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll();

	echo "<ul>";
		foreach($results as $item){
			echo "<li>". $item[$column] . "</li>";
		}

	echo "</ul>";
}


function listeazaTabel($tabel, $column){
	global $conn;

	$sql = "SELECT *
	        FROM $tabel";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll();

	
	echo "<table border='1'>";

	foreach($results as $item){
		echo "<tr>";
			echo "<td>".$item[$column]."</td>";
		echo "</tr>";

	}

	echo "</table>";


}

function listeazaSelect($tabel, $column, $name='tabel'){
	global $conn;

	$sql = "SELECT *
	        FROM $tabel";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll();

	
	echo "<select name='".$name."'>";

	foreach($results as $item){
		echo "<option value='".$item['id']."'>".$item[$column]."</option>";
	}
	echo "</select>";



}



