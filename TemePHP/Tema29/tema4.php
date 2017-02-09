<?php

// includem fisierul care contine clasa Database

include 'classes/Database.php';

// cream un obiect nou

$fruct = new Database();

// apelam metoda deleteDatabase();

$fruct->deleteDatabase(8);