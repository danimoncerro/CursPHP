<?php

require_once 'classes/User.php';


$id = $_GET['id'];

$utilizator = new User();
$utilizator->valideaza($id);
header("Location: tema5_utilizatori.php");
exit;