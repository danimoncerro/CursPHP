<?php

require_once 'classes/User.php';

// definim o variabila id careia ii atribuim valoarea id in url

$id = $_GET["id"];

$utilizator = new User();
$utilizator->delete($id);

// Creem o legatura catre fisierul tema4_orar_plecari_admin.php
?>

<br><br>
<a href="tema4_orar_plecari_admin.php">Vizualizare zboruri</a>

</body>
</html>