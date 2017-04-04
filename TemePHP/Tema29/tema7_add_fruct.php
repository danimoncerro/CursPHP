<?php

include 'classes/Database.php';
session_start();

if (isset($_POST['submit'])) {

	$nume = $_POST['nume'];
	$gust = $_POST['gust'];
	$provenienta = $_POST['provenienta'];

// cream un obiect nou

	$fruct = new Database();

// cream o variabila in care vom salva rezultatele returnate de metoda insertDatabase();

	$fructe = $fruct->insertDatabase($nume, $gust, $provenienta);

	header('Location: tema7_start.php');
}
