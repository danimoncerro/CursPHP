<?php

require_once 'classes/Orar.php';

// definim o variabila id careia ii atribuim valoarea id in url

$id = $_GET["id"];

$zbor = new OrarSosiri();
$zbor->delete($id);

// Creem o legatura catre fisierul tema5_orar_sosiri_utilizatori.php
?>

<br><br>
<a href="tema5_orar_sosiri_utilizatori.php">Vizualizare zboruri</a>

</body>
</html>
