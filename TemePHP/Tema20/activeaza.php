<?php

include 'connect.php';


$id = $_GET['id'];


$sql = "UPDATE users 
		SET valid =  1
		WHERE id = $id";


$conn->exec($sql);

header("Location: utilizatori.php");
exit;
