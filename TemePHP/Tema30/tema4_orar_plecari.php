<?php

require_once 'classes/Orar.php';

?>

<a href="tema4_formular_login.php">Login</a> | 
<a href="tema4_formular_new_user.php">New User</a>

<h2>Orar plecari</h2>

<?php

$zbor = new OrarPlecari();
$zbor->displayAll();

