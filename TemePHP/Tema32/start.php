<?php

require_once 'config.php';

echo "<h2>Magazin online - Cosul taranesc cu legume </h2>";

//echo $_SESSION['message'];

$leguma = new Leguma();
$leguma->findAll();

?>

<br>
<a href="view_cart.php">Vizualizare cos</a>

