<?php

require_once 'classes/Orar.php';
require_once 'classes/User.php';

?>
<a href="tema4_logout.php">Logout</a> | 
<a href="tema4_utilizatori.php">Vizualizare utilizatori</a> |

<h2>Orar plecari</h2>

<?php

$zbor = new OrarPlecari();
$zbor->displayAllLogat();

?>

<!--Adaugam butonul adauga un nou element in tabel
 -->

<br>
<a href="tema4_formular_inserare_orar_plecari_admin.php">Adauga zbor</a>

