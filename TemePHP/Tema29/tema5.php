<?php

// includem fisierul care contine clasa Database

include 'classes/Database.php';

// cream un obiect nou

$fruct = new Database();

// apelam metoda updateDatabase();

$fruct->updateDatabase('10', 'portocala', 'acra', 'Grecia');