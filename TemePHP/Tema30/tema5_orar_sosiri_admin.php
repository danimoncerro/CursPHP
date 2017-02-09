<?php

require_once 'classes/Orar.php';
require_once 'classes/User.php';

?>
<a href="tema5_logout.php">Logout</a> | 
<a href="tema5_utilizatori.php">Vizualizare utilizatori</a> |

<h2>Orar sosiri</h2>

<?php

$zbor = new OrarSosiri();
$zbor->displayAllLogat();

?>

<!--Adaugam butonul adauga un nou element in tabel
 -->

<br>
<a href="tema5_formular_inserare_orar_sosiri_admin.php">Adauga zbor</a>

