<?php

require_once 'classes/User.php';


$id = $_GET['id'];

$utilizator = new User();
$utilizator->invalideaza($id);
header("Location: tema4_utilizatori.php");
exit;
