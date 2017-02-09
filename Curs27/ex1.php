<?php 


include 'class.Tabel.php';

// 1. Cream un obiect 
$tabel = new Tabel();

// 2. Modificam proprietatea tabel 
// Noua valoare este 'localitate';
$tabel->tabel = 'localitate';
$tabel->column ='name';


// 3. Afisarea proprietatilor 
echo $tabel->tabel;
echo '<br>';
echo $tabel->column;