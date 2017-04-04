<?php 

include 'class.Tabel.php';

// Programare procedurala -> folosim functii :) 
//listeazaTabel('localitate', 'name');


// Programare obiectuala -> folosim  clase 

// V1
$tabel = new Tabel() ;
$tabel -> tabel = 'localitate';
$tabel -> column = 'name';

$tabel -> afiseaza();


// V2 
$tabel = new Tabel('localitate1', 'name1');
$tabel ->afiseaza(); 