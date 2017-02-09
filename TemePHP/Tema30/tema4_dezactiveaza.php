<?php

require_once 'classes/User.php';

$id = $_GET['id'];

$utilizator = new User();

// Cauta utilizator cu id-ul definit
$utilizator->findOneById($id);

// Dezactivare utilizator
$utilizator->setValid(0);

// Salveaza modificarile
$utilizator->update();

header("Location: tema4_utilizatori.php");
exit;
