<?php 


include 'class.Tabel.php';

// 1. Cream un obiect 
$tabelObject = new Tabel();



// 3. Afisarea proprietatilor 
echo $tabelObject->tabel;
echo '<br>';
echo $tabelObject->column;

echo '<hr>';

// Modificam proprietatile 
$tabelObject->tabel = 'elevi';
$tabelObject->column = 'numele';

// 3. Afisarea proprietatilor 
echo $tabelObject->tabel;
echo '<br>';
echo $tabelObject->column;

echo '<hr>';

// Modificam proprietatile 
$tabelObject->tabel = 'judete';
$tabelObject->column = 'name';

// 3. Afisarea proprietatilor 
echo $tabelObject->tabel;
echo '<br>';
echo $tabelObject->column;


