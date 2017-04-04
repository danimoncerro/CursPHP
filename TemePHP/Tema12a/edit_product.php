<?php

require_once 'function.php';

if (isset($_POST['submit'])) {

	
	$valid = false; 

	
	$id = intval($_GET['id']); 
	$title = $_POST['title'];
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$tip = $_POST['tip'];
	$year = intval($_POST['year']); 
	$km = intval($_POST['km']);
		

	if ($id > 0 &&
		strlen($title) >= 2 &&
		strlen($brand) >= 2 ) {
		$valid = true;
	}


	
	if (!$valid) {
		$_SESSION['msg_error'] = ''; 
		if (strlen($title) < 2) {
			$_SESSION['msg_error'] .= 'Campul clasa trebuie sa aiba minim 2 caractere.<br>';
		}

		if (strlen($brand) < 2) {
			$_SESSION['msg_error'] .= 'Campul marca trebuie sa aiba minim 2 caractere<br>';
		}

		
		header('Location: form_edit_product.php?id=' . $id);
		exit;

	}




	$sql = "
	UPDATE auto 
       SET title = '$title',
           brand = '$brand',
           model = '$model',
           tip = '$tip',
           year = '$year',
           km = '$km'
          
	WHERE id = $id;
	";
	//echo $sql;
	//exit;
	$result = mysqli_query($conn, $sql);

	if ($result) {
	    echo "Autovehiculul cu id-ul: $id a fost modificat";
		$_SESSION['msg'] = "Autovehiculul <b>$title</b> a fost modificat";
		header('Location: index.php');
		exit;
	} else {
		echo "Eroare la modificare cu id = $id";
	}

}