<?php

require_once 'classes/User.php';
require_once 'classes/Orar.php';

?>
<a href="tema5_logout.php">Logout</a>

<h2>Orar sosiri</h2>

<?php

$zbor = new OrarSosiri();
$zbor->displayAllLogat();

?>

<br>
<a href="tema5_formular_inserare_orar_sosiri_utilizatori.php">Adauga zbor</a>
