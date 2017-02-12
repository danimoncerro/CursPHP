<?php

session_start();
require_once 'classes/User.php';


if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

    $user = new User();
    $user->setUsername($username);
    $user->setPassword($password);

    $user->login();
}

