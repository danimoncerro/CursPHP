<?php

require_once 'classes/User.php';


$id = $_GET['id'];

$utilizator = new User();
$utilizator->findOneById($id) ;

// Valideaza utilizator 
$utilizator->setValid(1);

// Salvam modificarile
$utilizator->update();

header("Location: tema4_utilizatori.php");
exit;