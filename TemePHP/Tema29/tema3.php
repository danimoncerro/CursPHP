<?php

// includem fisierul care contine clasa Database

include 'classes/Database.php';

// cream un obiect nou

$fruct = new Database();

// cream o variabila in care vom salva rezultatele returnate de metoda selectDatabase();

$fruct->insertDatabase('caisa', 'dulce', 'Romania');