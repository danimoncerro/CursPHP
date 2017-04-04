<?php
if (isset($_POST['submit'])){
	// 1. Definim folderul de upload 
	$uploadFolder = dirname(__FILE__) . '/Upload/';

	// 2. Definim fisierul de upload - calea catre fisierul destinatie
	$uploadFile = $uploadFolder . basename($_FILES['poza']['name']);

    // 2.b. Definiem url pentru fisierul de upload
    $uploadUrl = "http://localhost/CursPHP/Curs6/Upload/" . basename($_FILES['poza']['name']);
	//echo $uploadFile;

	// 3. Copiem fisierul din folderul temp in folder destinatie
	if (move_uploaded_file($_FILES['poza']['tmp_name'], $uploadFile)) {
		echo "<img src='{$uploadUrl}' width='600'>";
	} else {
		echo "eroare la incarcarea pozei";
	}

}