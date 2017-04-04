<?php 


include 'class.Tabel.php';

// 1. Cream un obiect 
$tabelObject = new Tabel();

$tabelObject->afiseaza();


// Modificam proprietatile 
$tabelObject->tabel = 'elevi';
$tabelObject->column = 'numele';

$tabelObject->afiseaza();


// Modificam proprietatile 
$tabelObject->tabel = 'judete';
$tabelObject->column = 'name';

$tabelObject->afiseaza();



