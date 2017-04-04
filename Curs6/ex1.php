<?php 


// 1. Constante 
// $tva = 0.24;
// $tva = 3;
// $tva = 0.09;

define('TVA', 0.24); // TVA = 0.24 

echo TVA . '<br>';



// 2. Constanta magica 
echo __FILE__ . '<br>'; // afiseaza numele fisierului 

// 3. Afiseaza folderul in care se afla fisier
// - afisam folderul in care suntem 
echo dirname(__FILE__) . '<br>'; 

// 4. Construim calea catre folderul Upload
$uploadFolder = dirname(__FILE__) . '/Upload/';
echo $uploadFolder;