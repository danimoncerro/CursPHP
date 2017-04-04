<?php

include 'connect.php';


$id = $_GET['id'];


$sql = "UPDATE users 
		SET status =  1
		WHERE id = $id";


$conn->exec($sql);

header("Location: utilizatori.php");
exit;



// echo "Am activat utilizatorul cu idul $id";
// echo '<br><Br>';
// echo "<a href='utilizatori.php'>Listeaza userii </a>";