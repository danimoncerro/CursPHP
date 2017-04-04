<?php

include 'classes/Database.php';

$id = $_GET['id'];

// cream un obiect nou

$fruct = new Database();

// apelam metoda deleteDatabase();

$fruct->deleteDatabase($id);

header('Location: tema7_start.php');

