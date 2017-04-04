<?php
if (isset($_POST['submit'])){
	// 1. Definim folderul de upload 
	$uploadDirector = dirname(__FILE__) . '/Poze/';
	//echo $uploadDirector;

	// 2. Definim fisierul de upload - calea catre fisierul destinatie
	$uploadFisier = $uploadDirector . basename($_FILES['poza']['name']);

    // 2.b. Definiem url pentru fisierul de upload
    $uploadUrl = "http://localhost/TemePHP/Tema6/Poze/" . basename($_FILES['poza']['name']);
	//echo $uploadFisier;

	// 3. Copiem fisierul din folderul temp in folder destinatie
	if (move_uploaded_file($_FILES['poza']['tmp_name'], $uploadFisier)) {
		echo "<img src='{$uploadUrl}' width='600' >";
	} else {
		echo "eroare la incarcarea pozei";
	}

	echo "<hr>";
	foreach ($_POST as $k => $v) {
		echo "$k => $v <br>";
	}

} else {
	echo "Eroare";
}