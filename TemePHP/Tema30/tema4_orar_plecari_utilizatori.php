<?php

require_once 'classes/User.php';
require_once 'classes/Orar.php';

?>
<a href="tema4_logout.php">Logout</a>

<h2>Orar plecari</h2>

<?php

$zbor = new OrarPlecari();
$zbor->displayAllLogat();

?>

<br>
<a href="tema4_formular_inserare_orar_plecari_utilizatori.php">Adauga zbor</a>
