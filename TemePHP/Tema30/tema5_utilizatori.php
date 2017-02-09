<?php

require_once 'classes/User.php';

?>

<a href="tema5_orar_sosiri_admin.php">Vizualizare zboruri</a> | 
<a href="tema5_logout.php">Logout</a>

<h2>Utilizatori</h2>

<?php

$utilizator = new User();
$utilizator->displayAll();


