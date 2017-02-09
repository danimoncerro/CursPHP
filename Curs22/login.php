<?php

include 'connect.php';
include 'functions.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users
			WHERE email='$email'
			AND password='$password'
			AND valid = 1
			";

	// Preparam si executam sql-ul	

    $stmt = $conn->prepare($sql);
    $stmt->execute();
   
    // Citim utilizatorul
    $user = $stmt->fetch();

    if ($user) {
    	// ok
    	$_SESSION['logat'] = 1;
    	$_SESSION['user'] = $user;

    	header("Location: profile.php");
    	exit;

    } else {
    	$_SESSION['message'] = 'Utilizatorul nu exista. ';
    	header("Location: index.php");
    	exit;
    }

}