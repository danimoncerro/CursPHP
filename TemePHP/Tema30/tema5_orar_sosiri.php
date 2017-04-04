<?php

require_once 'classes/Orar.php';

?>

<a href="tema5_formular_login.php">Login</a> | 
<a href="tema5_formular_new_user.php">New User</a>

<h2>Orar sosiri</h2>

<?php

$zbor = new OrarSosiri();
$zbor->displayAll();

