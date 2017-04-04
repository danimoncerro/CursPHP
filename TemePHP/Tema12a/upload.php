<?php

require_once 'function.php';

if (isset($_POST['submit'])){
	
	$uploadFolder = dirname(__FILE__) . '/Upload/';

	
	$uploadFile = $uploadFolder . basename($_FILES['poza']['name']);

    
    $uploadUrl = "http://localhost/TemePHP/Tema12a/Upload/" . basename($_FILES['poza']['name']);
	
	if (move_uploaded_file($_FILES['poza']['tmp_name'], $uploadFile)) {
		// inseram $uploadUrl in campul image . 
		// La nivel de MySQL: facem UPDATE pe campul image., trebuie sa stim idul recordului

		$id = $_GET['id'];

		$sql = "UPDATE auto
		        SET image = '$uploadUrl'
		        WHERE id = $id;";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			$_SESSION['msg'] = "Poza s-a incarcat cu succes.";
		    header('Location: index.php');
		exit;
		} else {
			$_SESSION['msg'] = "Eroare la incarcarea pozei";
			header('Location: index.php');
			exit;
		}

		
	} else {
		echo "eroare la incarcarea pozei";
	}
}