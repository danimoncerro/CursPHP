<?php

include 'connect.php';


if (isset($_POST['submit'])){
	$id = $_POST['id'];
	$localitate = $_POST['numele'];
	$judet = $_POST['judetul'];

	
$sql = "UPDATE localitate 
        SET name = '$localitate',
            id_judet = '$judet'
        WHERE id = $id";


$stmt = $conn->prepare($sql);

$stmt->execute();

}


?>

<p> Datele localitatii au fost actualizate cu succes. </p>
<p> <a href="tema_index.php"> Lista localitati </a> </p>