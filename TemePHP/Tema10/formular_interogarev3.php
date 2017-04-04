<?php

// Conectare la DB
require_once 'conectare.php';

// Include function.php
require_once 'function.php';

// S-a trimis formularul
if (isset($_GET['submit'])) {

	$id = $_GET['id']; // citim idul din formular / URL

	afiseaza_utilizator($id);
	
}
?>


<form action="" method="get">

<p>Introduceti id-ul utilizatorului pentru care doriti sa se afiseze informatiile</p>
<input type="text" placeholder="Introdu id" name="id" required>


<input type="submit" name="submit" value="AFISARE">


</form>