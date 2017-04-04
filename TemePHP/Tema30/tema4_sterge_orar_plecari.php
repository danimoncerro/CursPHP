<?php

require_once 'classes/Orar.php';

// definim o variabila id careia ii atribuim valoarea id in url

$id = $_GET["id"];

$zbor = new OrarPlecari();
$zbor->delete($id);

// Creem o legatura catre fisierul tema4_orar_plecari_utilizatori.php
?>

<br><br>
<a href="tema4_orar_plecari_utilizatori.php">Vizualizare zboruri</a>

</body>
</html>
