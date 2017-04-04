<?php

include 'classes/Database.php';


if (isset($_POST['submit'])) {

	$id = $_GET['id'];
	$nume = $_POST['nume'];
	$gust = $_POST['gust'];
	$provenienta = $_POST['provenienta'];

// cream un obiect nou

	$fruct = new Database();

// apelam metoda updatetDatabase();

	$fructe = $fruct->updateDatabase($id, $nume, $gust, $provenienta);

	header('Location: tema7_start.php');
}