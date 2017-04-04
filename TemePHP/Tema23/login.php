<?php

include 'connect.php';
include 'functions.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users
			WHERE username='$username'
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
        $_SESSION['user_id'] = $user['id'];
    	header("Location: index_logat.php");
    	exit;

    } else {
    	$_SESSION['message'] = 'Utilizatorul nu exista. ';
    	header("Location: index.php");
    	exit;
    }

}

