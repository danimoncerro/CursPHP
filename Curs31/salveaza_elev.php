<?php

include 'connect.php';

// citim id-ul

if (isset($_POST['submit'])){
	$id = $_POST['id'];
	$numele = $_POST['numele'];
	$clasa = $_POST['clasa'];


// construim sql-ul de actualizare

$sql = "UPDATE elevi 
        SET numele = '$numele',
            clasa = '$clasa'
        WHERE id = $id";

// rulam sql-ul

$stmt = $conn->prepare($sql);

$stmt->execute();

}


// afisam un mesaj de succes
?>

<p> Datele elevului au fost actualizate cu succes. </p>
<p> <a href="test9.php"> Lista elevi </a> </p>






