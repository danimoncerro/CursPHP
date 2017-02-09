<?php 


include 'class.Tabel.php';

// 1. Cream un obiect 
$tabelObject = new Tabel();

afiseaza($tabelObject);


// Modificam proprietatile 
$tabelObject->tabel = 'elevi';
$tabelObject->column = 'numele';

afiseaza($tabelObject);


// Modificam proprietatile 
$tabelObject->tabel = 'judete';
$tabelObject->column = 'name';

afiseaza($tabelObject);




// 3. Afisarea proprietatilor 
function afiseaza($tabelObject) {


	echo $tabelObject->tabel;
	echo '<br>';
	echo $tabelObject->column;

	echo '<hr>';
}
